<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reparation extends Model
{
    protected $fillable = [
        "date",
        "duree_main_oeuvre",  
        "objet_reparation",
        "vehicule_id",   // Ajout de la colonne pour la clé  étrangère vehicule_id
        "technicien_id"  // Ajout de la colonne pour la clé étrangère technicien_id           
    ];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class ,'vehicule_id');
    }

    public function technicien()
    {
        return $this->belongsTo(Technicien::class ,'technicien_id');
    }
}
