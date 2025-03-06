<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reparation extends Model
{
    protected $fillable = [
        "date",
        "duree_main_oeuvre",  
        "objet_reparation",        
    ];
}
