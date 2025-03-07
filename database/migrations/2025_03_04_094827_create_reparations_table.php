<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reparations', function (Blueprint $table) {
            $table->id();
            $table->string("date");
            $table->string("duree_main_oeuvre");
            $table->text("objet_reparation"); 

             // Ajout des clés étrangères pour la relation
            $table->foreignId('vehicule_id')->constrained()->onDelete('cascade');  // Cette ligne ajoute vehicule_id et la contrainte
            $table->foreignId('technicien_id')->constrained()->onDelete('cascade'); // Cette ligne ajoute technicien_id et la contrainte
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparations');
    }
};
