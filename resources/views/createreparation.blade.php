@extends('layouts.form')

@section('title' ,'Ajout des réparations')

@section('formTitle' ,'Ajouter une réparation')

@section('formAction' ,route('storereparation'))

@section('formFields')
	<div class="col-md-6">
        <label for="technicien_id" class="form-label">Technicien</label>
        <select class="form-select" id="technicien_id" name="technicien_id" required>
        	<option value="">Sélectionner un technicien</option>
        	@foreach($techniciens as $technicien)
            <option value="{{ $technicien->id }}">{{ $technicien->nom }} {{ $technicien->prenom }}</option>
            @endforeach
        </select>  
    </div>

    <div class="col-md-6">
        <label for="vehicule_id" class="form-label">Véhicule</label>
        <select class="form-select" id="vehicule_id" name="vehicule_id" required>
            <option value="">Sélectionner un véhicule</option>
            @foreach($vehicules as $vehicule)
            <option value="{{ $vehicule->id }}">{{ $vehicule->immatriculation }}</option>
            @endforeach
        </select>
    </div>  

	<div class="col-md-6">
        <label for="date" class="form-label">Date de la réparation</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>

    <div class="col-md-6">
        <label for="duree_main_oeuvre" class="form-label">Durée de la main d'oeuvre</label>
        <input type="number" class="form-control" id="duree_main_oeuvre" name="duree_main_oeuvre" required>
    </div>

    <div class="col-md-6">
        <label for="objet_reparation" class="form-label">Objet réparé</label>
        <input type="text" class="form-control" id="objet_reparation" name="objet_reparation" required>
    </div>
@endsection

@section('buttonText', 'Ajouter la Réparation')