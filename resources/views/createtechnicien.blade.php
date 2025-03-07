@extends('layouts.form')

@section('title' ,'Ajouter un technicien')  

@section('formTitle' ,'Ajouter un technicien')

@section('formAction' ,route('storetechnicien'))

@section('formFields')
	<div class="col-md-6">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>

    <div class="col-md-6">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>

    <div class="col-md-6">
        <label for="specialite" class="form-label">Spécialité</label>
        <select class="form-select" id="specialite" name="specialite" required>
            <option value="Essence">Mécanique</option>
            <option value="Diesel">Carosserie</option>
            <option value="Électrique">Électromécanique</option>
            <option value="Hybride">Peinture</option>
        </select>
    </div>
@endsection

@section('buttonText' ,'Ajouter le technicien')