<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $fillable = [
        "immatriculation",
        "marque",
        "modele",
        "couleur", 
        "annee",
        "kilometrage",
        "carosserie",
        "energie",
        "boite",
    ]; 
}
