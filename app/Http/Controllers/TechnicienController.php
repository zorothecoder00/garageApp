<?php

namespace App\Http\Controllers;     

use Illuminate\Http\Request; 
use App\Models\Technicien;  

class TechnicienController extends Controller
{
    public function index()
    {
        $techniciens = Technicien::all();
        return view('techniciens' ,compact('techniciens'));
    }

    public function createTechnicien()
    {  
        return view('createtechnicien');  
    }

    public function storeTechnicien(Request $request)
    {
        $validated = $request->validate([
            'nom'=> 'required|string',
            'prenom'=> 'required|string',
            'specialite'=> 'required|string|in:Mécanique,Carosserie,Électromécanique,Peinture',
        ]); 

        $technicien = Technicien::create($validated);

        return redirect()->route('techniciens')->with('success' ,'Technicien ajouté avec succès');
    }

    public function editTechnicien($id)
    {
        $technicien = Technicien::findOrFail($id);

        return view('edittechnicien' ,compact('technicien'));
    }

    public function updateTechnicien(Request $request, $id)
    {
        // Valider les données du formulaire
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'specialite' => 'required|string|in:Essence,Diesel,Électrique,Hybride',  // Validation sur les spécialités
    ]);

    // Récupérer le technicien à mettre à jour
    $technicien = Technicien::findOrFail($id);

    // Mettre à jour les champs de la réparation
    $reparation->technicien_id = $validated['technicien_id'];
    $reparation->vehicule_id = $validated['vehicule_id'];
    $reparation->date = $validated['date'];
    $reparation->duree_main_oeuvre = $validated['duree_main_oeuvre'];
    $reparation->objet_reparation = $validated['objet_reparation'];

    // Sauvegarder les modifications
    $reparation->save();

        return redirect()->route('techniciens')->with('sucess' ,'Technicien modifié avec succès.');
    }

    // Méthode à supprimer si elle n'est plus nécessaire
    public function deleteTechnicien($id)
    {
        $technicien = Technicien::findOrFail($id);
        $technicien->delete();

        return redirect()->route('techniciens')->with('success', 'Technicien supprimé avec succès');
    }

}
