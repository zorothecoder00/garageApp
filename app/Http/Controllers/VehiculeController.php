<?php

namespace App\Http\Controllers;    


use Illuminate\Http\Request; 
use App\Models\Vehicule; 

class VehiculeController extends Controller   
{
    public function index()
    {
        $vehicules = Vehicule::all(); // Récupère tous les véhicules depuis la base de données
        return view('vehicules', compact('vehicules')); // Passe la variable $vehicules à la vue
    }

    // Afficher le formulaire pour ajouter un véhicule
    public function createVehicule()
    {
        return view('createvehicule'); // Assure-toi que la vue est bien dans resources/views/
    }

    public function storeVehicule(Request $request) 
    {

        // Validation des données 
        $validated = $request->validate([
            'immatriculation' => 'required|string|max:20|unique:vehicules,immatriculation',
            'marque' => 'required|string|max:50',
            'modele' => 'required|string|max:50',
            'couleur' => 'required|string|max:30',
            'annee' => 'required|integer|min:1900|max:' . date('Y'),
            'kilometrage' => 'required|integer|min:0',
            'carosserie' => 'required|string|in:Berline,SUV,Coupé,Break,Cabriolet',
            'energie' => 'required|string|in:Essence,Diesel,Électrique,Hybride',
            'boite' => 'required|string|in:Manuelle,Automatique',
        ]);

        //Création du véhicule
        $vehicule = Vehicule::create($validated);       

        // Redirection vers la liste des véhicules
        return redirect()->route('vehicules')->with('success' ,'Véhicule ajouté avec succès');
    }

    public function editVehicule($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        return view('editvehicule', compact('vehicule'));
    }

    public function updateVehicule(Request $request, $id)
    {
        $validated = $request->validate([
            'immatriculation' => 'required|string|max:20|unique:vehicules,immatriculation'. $id,
            'marque' => 'required|string|max:50',
            'modele' => 'required|string|max:50',
            'couleur' => 'required|string|max:30',
            'annee' => 'required|integer|min:1900|max:' . date('Y'),
            'kilometrage' => 'required|integer|min:0',
            'carosserie' => 'required|string|in:Berline,SUV,Coupé,Break,Cabriolet',
            'energie' => 'required|string|in:Essence,Diesel,Électrique,Hybride',
            'boite' => 'required|string|in:Manuelle,Automatique',
        ]);

        $vehicule = Vehicule::findOrFail($id);
        
         // Mettre à jour les informations du véhicule
        $vehicule->immatriculation = $validated['immatriculation'];
        $vehicule->marque = $validated['marque'];
        $vehicule->modele = $validated['modele'];
        $vehicule->couleur = $validated['couleur'];
        $vehicule->annee = $validated['annee'];
        $vehicule->kilometrage = $validated['kilometrage'];
        $vehicule->carosserie = $validated['carosserie'];
        $vehicule->energie = $validated['energie'];
        $vehicule->boite = $validated['boite'];

        // Sauvegarder les modifications
        $vehicule->save();
        return redirect()->route('vehicules')->with('success', 'Véhicule mis à jour avec succès.');
    }

    public function deleteVehicule($id)
    {
       
    $vehicule = Vehicule::findOrFail($id);
    $vehicule->delete();

    return redirect()->route('vehicules')->with('success', 'Véhicule supprimé avec succès'); 
    }

}
