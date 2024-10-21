<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ParametreController extends Controller
{
    public function index()
    {
        return view('admin.parametre.index');
    }

    public function updateetablissement(Request $request, $id)
    {

        $etablissement = Etablissement::findOrFail($id);

        if ($request->hasFile('file')) {
            $media = $request->file('file');
            $name = $media->hashName();
            $media->storeAs('public/logo', $name);

            // Supprimer l'ancienne image de profil si elle existe
            if ($etablissement->logo) {
                Storage::delete('public/logo/' . $etablissement->logo);
            }

            $etablissement->logo = $name;
        }

        // Mettre à jour les autres informations de l'utilisateur
        $etablissement->nometablissement = $request->nometablissement;
        $etablissement->adresse = $request->adresse;
        $etablissement->email = $request->email;
        $etablissement->contact = $request->contact;
        $etablissement->description = $request->description;

        $etablissement->save();

        return back()->with('success', 'Etablissement modifié avec success.');
    }
}
