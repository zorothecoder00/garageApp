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
}
