<?php

namespace App\Http\Controllers;

use App\Models\CalendrierEvaluation;
use App\Models\EtablissementFiliere;
use Illuminate\Http\Request;

class CalendrierEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ecoleId = auth()->user()->etablissement_id;

        $filieres = EtablissementFiliere::with('filiere')->where('active', 1)->where('etablissement_id', $ecoleId)->get();

        return view('admin.calendrier.calendrier',compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CalendrierEvaluation::create([
            'matiere_id' => $request->matiere_id,
            'type_sujet_id' => $request->type_sujet_id,
            'filiere_id' => $request->filiere_id,
            'classe_id' => $request->classe_id,
            'debut' => $request->debut,
            'fin' => $request->fin,
            //'etablissement_id' => auth()->user()->etablissement_id,
        ]);

        if (auth()->user()->role_id == 2) {
            return redirect()->route('calendrier.professeur')->with('success', 'Sujet créé avec succès.');
        } elseif (auth()->user()->role_id == 3) {
            return redirect()->route('calendrier.admin')->with('success', 'Sujet créé avec succès.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CalendrierEvaluation $calendrierEvaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalendrierEvaluation $calendrierEvaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CalendrierEvaluation $calendrierEvaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalendrierEvaluation $calendrierEvaluation)
    {
        //
    }
}
