<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technicien extends Model
{
      protected $fillable = [
        "nom",
        "prenom",  
        "specialite",         
    ]; 
}
