@extends('layouts.form')

@section('title', 'Ajouter un Nouveau Véhicule')

@section('formTitle', 'Ajouter un Nouveau Véhicule')

@section('formAction', route('storevehicule'))

@section('formFields')
    <div class="col-md-6">
        <label for="immatriculation" class="form-label">Immatriculation</label>
        <input type="text" class="form-control" id="immatriculation" name="immatriculation" required>
    </div>

    <div class="col-md-6">
        <label for="marque" class="form-label">Marque</label>
        <input type="text" class="form-control" id="marque" name="marque" required>
    </div>

    <div class="col-md-6">
        <label for="modele" class="form-label">Modèle</label>
        <input type="text" class="form-control" id="modele" name="modele" required>
    </div>

    <div class="col-md-6">
        <label for="couleur" class="form-label">Couleur</label>
        <input type="text" class="form-control" id="couleur" name="couleur" required>
    </div>

    <div class="col-md-6">
        <label for="annee" class="form-label">Année</label>
        <input type="number" class="form-control" id="annee" name="annee" required>
    </div>

    <div class="col-md-6">
        <label for="kilometrage" class="form-label">Kilométrage</label>
        <input type="number" class="form-control" id="kilometrage" name="kilometrage" required>
    </div>

    <div class="col-md-6">
        <label for="carosserie" class="form-label">Carrosserie</label>
        <select class="form-select" id="carosserie" name="carosserie" required>
            <option value="Berline">Berline</option>
            <option value="SUV">SUV</option>
            <option value="Coupé">Coupé</option>
            <option value="Break">Break</option>
            <option value="Cabriolet">Cabriolet</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="energie" class="form-label">Énergie</label>
        <select class="form-select" id="energie" name="energie" required>
            <option value="Essence">Essence</option>
            <option value="Diesel">Diesel</option>
            <option value="Électrique">Électrique</option>
            <option value="Hybride">Hybride</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="boite" class="form-label">Boîte de vitesse</label>
        <select class="form-select" id="boite" name="boite" required>
            <option value="Manuelle">Manuelle</option>
            <option value="Automatique">Automatique</option>
        </select>
    </div>

@endsection

@section('buttonText', 'Ajouter le Véhicule')
