<?php

namespace App\Http\Controllers;

use App\Models\Sujet;
use App\Http\Requests\StoreSujetRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Requests\UpdateSujetRequest;
use App\Models\Classe;
use App\Models\EtablissementFiliere;
use App\Models\Filiere;
use App\Models\Matiere;
use App\Models\TypeSujet;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\User;




class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flistesujet = new Sujet();

        $ecoleId = auth()->user()->etablissement_id;

        if(auth()->user()->role_id == 2){
            /* $listesujets = $flistesujet->listesujetbyprof(); */
            $listesujets = Sujet::with('filiere','matiere','classe','typeSujet')
            ->where('user_id',2)
            ->where('etablissement_id', auth()->user()->etablissement_id)->get();
        }elseif(auth()->user()->role_id == 3){
            $listesujets = Sujet::with('filiere','matiere','classe','typeSujet')
            ->where('etablissement_id', auth()->user()->etablissement_id)->get();
        }


        return view('admin.sujet.listesujet',compact('listesujets'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();

        $userRole = $user->role_id;

        $ecoleId = auth()->user()->etablissement_id;

        $typessujets = TypeSujet::all();

        $filiere = new Filiere();

        $filieres = EtablissementFiliere::with('filiere')->where('active', 1)->where('etablissement_id', $ecoleId)->get();

        if ($userRole === 2) {
            // Si l'utilisateur est un professeur, récupérer les classes qu'il enseigne dans son école
            $selectedClasses = json_decode($user->selected_classes);
            $classes = Classe::whereIn('id', $selectedClasses)->get();
            // Convertissez la chaîne 'matiere_id' en tableau
            $matiereIds = explode(',', $user->matiere_id);
            // Utilisez ce tableau pour récupérer les matières
            $professeurMatiere = Matiere::findMany($matiereIds);

        } elseif ($userRole === 3) {
            // Si l'utilisateur est un administrateur, récupérer toutes les classes de l'école
            $fclasse = new Classe();

            $fmatiere = new Matiere();

            $classes = Classe::where('etablissement_id',$ecoleId)->get();

            $professeurMatiere = null; // Initialiser à null pour les autres rôles

            $matieres = $fmatiere->listematierebyecole();

        } else {
            // Pour les autres rôles d'utilisateurs, ne pas afficher de classes
            $classes = collect();
            $professeurMatiere = null;
        }

        $cycleIds = [];

        // Obtenir toutes les matières pour l'administrateur, sinon inclure la matière du professeur (si disponible)
        $matieres = ($userRole === 3) ? $matieres = $fmatiere->listematierebyecole() : Matiere::whereIn('cycle_id', $cycleIds)->get();

        if ($professeurMatiere) {
            $matieres->push($professeurMatiere);
        }

        return view('admin.sujet.creersujet',compact('typessujets','matieres','professeurMatiere','classes','filieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        /* dd($request->all()); */
        // Validation des données du sujet
        $validated = $request->validate([
            'type_sujet_id' => 'required',
            'filiere_id' => 'required',
            'matiere_id' => 'required',
            'classe_id' => 'required',
            'noteprincipale' => 'required|min:1',
            'heure' => 'required',
            'consigne' => 'required'
        ],
        [
            'type_sujet_id.required' => 'Le Type sujet est obligatoire.',
            'filiere_id.required' => 'La Filière est obligatoire.',
            'matiere_id.required' => 'Le Matière est obligatoire.',
            'classe_id.required' => 'La Classe est obligatoire.',
            'noteprincipale.required' => 'La noteprincipale est obligatoire.',
            'heure.required' => 'L\'heure est obligatoire.',
            'consigne.required' => 'La consigne est obligatoire.'
        ]);


        // Récupérer la matière associée
        $matiere = Matiere::find($validated['matiere_id']);

        if (!$matiere) {
            return redirect()->back()->withErrors(['matiere_error' => 'La matière sélectionnée est invalide.']);
        }

        // Générer le code pour le sujet basé sur le nom de la matière
        $latestSubject = Sujet::where('matiere_id', $matiere->id)->latest()->first();
        $count = $latestSubject ? (int) substr($latestSubject->code, -2) + 1 : 1;
        $code = strtoupper(substr($matiere->nommatiere, 0, 4)) . str_pad($count, 2, '0', STR_PAD_LEFT);

        // Calculer le total des points des réponses
        $totalPoints = 0;
        // Récupérer les fichiers

        $files = $request->file('sections', []);
        foreach ($request->input('sections', []) as $sectionKey => $section) {
            foreach ($section['questions'] as $question) {
                foreach ($question['reponses'] as $reponse) {
                    $totalPoints += (int) $reponse['points'];
                }
            }
        }

        // Vérifier si le total des points correspond à la note principale
        /* if ($totalPoints > $validated['noteprincipale']) {
            return redirect()->back()->withErrors(['points_error' => 'Le total des points des réponses ne doit pas dépasser la note principale du sujet.']);
        } */

            // Sauvegarder le sujet avec le statut par défaut
            $subject = Sujet::create([
                'code' => $code, // Code généré automatiquement
                'type_sujet_id' => $validated['type_sujet_id'],
                'filiere_id' => $validated['filiere_id'],
                'matiere_id' => $validated['matiere_id'],
                'classe_id' => $validated['classe_id'],
                'noteprincipale' => $validated['noteprincipale'],
                'heure' => $validated['heure'],
                'consigne' => $validated['consigne'],
                'status' => 'non-corrigé',
                'user_id' => auth()->user()->id,
                'etablissement_id' => auth()->user()->etablissement_id
            ]);

            // Sauvegarder les sections, questions et réponses
            foreach ($request->input('sections', []) as $sectionKey => $sectionData) {
                if (!empty($sectionData['titre']) && !empty($sectionData['soustitre'])) {
                    // Vérifier si une image pour la section existe
                    $sectionImage = null;
                    if (isset($files[$sectionKey]['soustitre']['image'])) {
                        $extension = $files[$sectionKey]['soustitre']['image']->getClientOriginalExtension();
                        $newSectionImageName = time() . '_' . 'soustitre.' . $extension;
                        $files[$sectionKey]['soustitre']['image']->move(public_path('images'), $newSectionImageName);
                        $sectionImage = 'images/' . $newSectionImageName;
                    }

                    // Sauvegarder la section avec l'image si elle existe
                    $section = $subject->sections()->create([
                        'titre' => $sectionData['titre'],
                        'soustitre' => $sectionData['soustitre'],
                        'image_section' => $sectionImage,
                        'user_id' => auth()->user()->id
                    ]);

                    foreach ($sectionData['questions'] ?? [] as $questionKey => $questionData) {
                        if (!empty($questionData['libquestion'])) {
                            // Vérifier si une image pour la question existe
                            $questionImage = null;
                            if (isset($files[$sectionKey]['questions'][$questionKey]['image'])) {
                                $extension = $files[$sectionKey]['questions'][$questionKey]['image']->getClientOriginalExtension();
                                $newQuestionImageName = time() . '_' . 'question.' . $extension;
                                $files[$sectionKey]['questions'][$questionKey]['image']->move(public_path('images'), $newQuestionImageName);
                                $questionImage = 'images/' . $newQuestionImageName;
                            }
                            // Sauvegarder la question avec l'image si elle existe
                            $question = $section->questions()->create([
                                'libquestion' => $questionData['libquestion'],
                                'image_question' => $questionImage,
                                'user_id' => auth()->user()->id
                            ]);

                        foreach ($questionData['reponses'] ?? [] as $answerData) {

                            if (!empty($answerData['libreponse'])) {
                                // Assurez-vous que la valeur de `result` est correcte avant d'insérer
                                $resultValue = in_array($answerData['result'], ['bonne_reponse', 'mauvaise_reponse', 'mauvaise_reponse-']) ? $answerData['result'] : null;
                                $question->reponses()->create([
                                    'libreponse' => $answerData['libreponse'],
                                    'result' => $resultValue,
                                    'points' => isset($answerData['points']) ? intval($answerData['points']) : 0,
                                    'is_correct' => $answerData['result'] === 'bonne_reponse',
                                    'user_id' => auth()->user()->id
                                ]);
                            }
                        }

                    }
                }
            }
        }


        if (auth()->user()->role_id == 2) {
            return redirect()->route('sujet.professeur')->with('success', 'Sujet créé avec succès.');
        } elseif (auth()->user()->role_id == 3) {
            return redirect()->route('sujet.admin')->with('success', 'Sujet créé avec succès.');
        }
    }

//Générer le code Qr
    public function generateRandomCode() {
        $numbers = mt_rand(100, 999);
        $letters = '';
        for ($i = 0; $i < 2; $i++) {
            $letters .= chr(mt_rand(65, 90));
        }
            return $numbers . $letters;
    }

    public function generateRandomSubjects($originalSubject, $nbrSubjects)
    {
        $randomSubjects = [];

        /*for ($i = 0; $i < $nbrSubjects; $i++) {
        }*/
            $newSubject = clone $originalSubject;
            $newSubject->sections = new Collection();

            // Créer une copie des sections et les mélanger
            $shuffledSections = $originalSubject->sections->shuffle();

            foreach ($shuffledSections as $originalSection) {
                $newSection = clone $originalSection;

                // Mélanger les questions au sein de la section
                $newSection->questions = $originalSection->questions->shuffle();

                // Mélanger les réponses pour chaque question
                $newSection->questions->each(function ($question) {
                    $question->reponses = $question->reponses->shuffle();
                });

                $newSubject->sections->push($newSection);
            }

            // Générer une référence unique pour ce sujet
            $reference = $this->generateRandomCode();
            $newSubject->reference = $reference;
            $nometablissement = $originalSubject->etablissement->nometablissement ?? 'Non spécifié';
            $matiere = $originalSubject->matiere->nommatiere ?? 'Non spécifié';
            $filiere = $originalSubject->filiere->nomfiliere  ?? 'Non spécifié';
            $classe = $originalSubject->classe->nomclasse ?? 'Non spécifié';

            $qrCodeContent = "Ref: $reference | Établissement: $nometablissement | Matière: $matiere | Filière: $filiere | Classe: $classe";

            $qrCode = QrCode::size(150)->generate($qrCodeContent);

            // Enregistrer la référence et le QR code dans la base de données
            /*$savedQrCode = DB::table('subject_qrcodes')->insertGetId([
                'subject_id' => $newSubject->id,
                'reference' => $reference,
                'qrcode' => $qrCodeContent,
                'created_at' => now(),
                'updated_at' => now(),
            ]);*/

            // Assigner le QR code généré au nouveau sujet
            $newSubject->qrCode = $qrCode;

            $randomSubjects[] = $newSubject;


        return $randomSubjects;
    }


    // Fonction pour calculer les points
    private function calculatePoints($questions)
    {
        $totalPoints = 0;

        foreach ($questions as $question) {
            foreach ($question->reponses as $reponse) {
                // Ajoute les points de la réponse si elle est correcte
                if ($reponse->is_correct) {
                    $totalPoints += $reponse->points;
                }
            }
        }

        return $totalPoints;
    }

    public function details($id){
        $sujet = Sujet::with([
            'classe',
            'classe.filiere',
            'classe.filiere.niveau',
            'filiere.etablissementFilieres',
            'etablissement',
            'matiere',
            'typeSujet',
            'sections.questions.reponses'
        ])->findOrFail($id);

        // Récupération du classe_id du sujet
        $classeId = $sujet->classe_id;

        // Nombre de sujet
        $userCount = User::where('role_id', 2)
                        ->where('classe_id', $classeId)
                        ->count();

        // Création des données pour le sujet affiché
        $dataAtributes = [
            'typesujet' => $sujet->typeSujet->libtypesujet ?? 'Non spécifié',
            'matiere' => $sujet->matiere->nommatiere ?? 'Non spécifié',
            'filiere' => $sujet->filiere->nomfiliere ?? $sujet->filiere->etablissementFilieres->nomfilieretablissement,
            'classe' => $sujet->classe->nomclasse ?? 'Non spécifié',
            'heure' => $sujet->heure,
            'noteprincipale' => $sujet->noteprincipale,
            'consigne' => $sujet->consigne,
            'sections' => $sujet->sections,
        ];

        $matiere = $sujet->matiere;

        $etablissementMatieres = $matiere->etablissementMatieres;

        $etablissementMatiere = $etablissementMatieres->firstWhere('id', $matiere->id);

        if ($etablissementMatiere) {
            $coefficient = $etablissementMatiere->coefficient;
            $ects = $etablissementMatiere->credit;
        }else{
            $coefficient = 0;
            $ects = 0;
        }

        // Calcul des points pour chaque section du sujet actuel
        foreach ($dataAtributes['sections'] as $section) {
            $section->total_points = $this->calculatePoints($section->questions);
        }
       // Générer une référence unique pour ce sujet
        $reference = $this->generateRandomCode();
        $dataAtributes['reference'] = $reference;

        // Générer un QR code pour cette référence
        $qrCode = QrCode::size(100)->generate($reference);
        $dataAtributes['qrCode'] = $qrCode;
        return view('admin.sujet.details', compact('dataAtributes','coefficient','ects'));
    }

    public function getCoefficientAndEcts($matiere_id)
    {
        $matiere = Matiere::with('etablissementMatieres')->find($matiere_id);

        if (!$matiere) {
            return response()->json(['error' => 'Matière non trouvée'], 404);
        }

        $etablissementMatiere = $matiere->etablissementMatieres->first();

        if ($etablissementMatiere) {
            $coefficient = $etablissementMatiere->coefficient;
            $ects = $etablissementMatiere->credit;
        } else {
            $coefficient = 0;
            $ects = 0;
        }

        return response()->json([
            'coefficient' => $coefficient,
            'ects' => $ects,
        ]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Sujet $sujet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sujet $sujet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSujetRequest $request, Sujet $sujet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sujet $sujet)
    {
        //
    }
}
