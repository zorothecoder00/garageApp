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
    
}
