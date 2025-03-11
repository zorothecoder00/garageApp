<?php

namespace App\Http\Controllers;  

use Illuminate\Http\Request;
use App\Models\Reparation;
use App\Models\Technicien;
use App\Models\Vehicule;


class ReparationController extends Controller
{
    public function index()  
    {
        $reparations = Reparation::with('technicien' ,'vehicule')->get();
        return view('reparations' ,compact('reparations'));  
    }

    public function createReparation()
    {
        $techniciens = Technicien::all(); // Récupérer tous les techniciens
        $vehicules = Vehicule::all(); // Récupérer tous les véhicules
        return view('createreparation', compact('techniciens', 'vehicules'));
    }

    public function storeReparation(Request $request)
    {

        // Validation des données
        $validated = $request->validate([
            'technicien_id' => 'required|exists:techniciens,id',
            'vehicule_id' => 'required|exists:vehicules,id',
            'date_reparation' => 'required|date',
            'duree_main_oeuvre' => 'required|integer|min:1',
            'objet_reparation' => 'required|string|max:255',
        ]);

        //Création de la réparation
        $reparation = Reparation::create($validated);

        // Redirection vers la liste des véhicules
        return redirect()->route('reparations')->with('success' ,'Réparation ajoutée avec succès');
    }

    public function editReparation($id)
    {
        // Récupérer la réparation, les techniciens et les véhicules pour remplir les champs du formulaire
        $reparation = Reparation::findOrFail($id);
        $techniciens = Technicien::all();
        $vehicules = Vehicule::all();  

        // Retourner la vue avec les données de la réparation, techniciens et véhicules
        return view('editreparation', compact('reparation', 'techniciens', 'vehicules'));
    }

    public function updateReparation(Request $request, $id)
    {
        $validated = $request->validate([
        'technicien_id' => 'required|exists:techniciens,id',
        'vehicule_id' => 'required|exists:vehicules,id',
        'date' => 'required|date',
        'duree_main_oeuvre' => 'required|numeric',
        'objet_reparation' => 'required|string|max:255',
    ]);

    // Récupérer la réparation à mettre à jour
    $reparation = Reparation::findOrFail($id);

    // Mettre à jour manuellement les champs de la réparation
    $reparation->technicien_id = $validated['technicien_id'];
    $reparation->vehicule_id = $validated['vehicule_id'];
    $reparation->date = $validated['date'];
    $reparation->duree_main_oeuvre = $validated['duree_main_oeuvre'];
    $reparation->objet_reparation = $validated['objet_reparation'];

    // Sauvegarder les modifications dans la base de données
    $reparation->save();
    
    // Sauvegarder les modifications 
    $reparation->save();

        // Rediriger vers une autre page avec un message de succès
        return redirect()->route('reparations')->with('success', 'Réparation mise à jour avec succès');
    }

    // Méthode à supprimer si elle n'est plus nécessaire
    public function deleteReparation($id)
    {
        $reparation = Reparation::findOrFail($id);
        $reparation->delete();

        return redirect()->route('reparations')->with('success', 'Réparation supprimée avec succès');
    }

}
