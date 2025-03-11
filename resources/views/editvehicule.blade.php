@extends('layouts.form')     

@section('title', 'Modification du Véhicule')

@section('formTitle', 'Modification du Véhicule')

@section('formAction', route('updatevehicule', $vehicule->id))

@section('formMethod')  
    @method('PUT')
@endsection

@section('formFields')
    <div class="col-md-6">
        <label for="immatriculation" class="form-label">Immatriculation</label>
        <input type="text" class="form-control" id="immatriculation" name="immatriculation" value="{{ $vehicule->immatriculation }}" required>
    </div>

    <div class="col-md-6">
        <label for="marque" class="form-label">Marque</label>
        <input type="text" class="form-control" id="marque" name="marque" value="{{ $vehicule->marque }}" required>
    </div>

    <div class="col-md-6">
        <label for="modele" class="form-label">Modèle</label>
        <input type="text" class="form-control" id="modele" name="modele" value="{{ $vehicule->modele }}" required>
    </div>

    <div class="col-md-6">
        <label for="couleur" class="form-label">Couleur</label>
        <input type="text" class="form-control" id="couleur" name="couleur" value="{{ $vehicule->couleur }}" required>
    </div>

    <div class="col-md-6">
        <label for="annee" class="form-label">Année</label>
        <input type="number" class="form-control" id="annee" name="annee" value="{{ $vehicule->annee }}" required>
    </div>

    <div class="col-md-6">
        <label for="kilometrage" class="form-label">Kilométrage</label>
        <input type="number" class="form-control" id="kilometrage" name="kilometrage" value="{{ $vehicule->kilometrage }}" required>
    </div>

    <div class="col-md-6">
        <label for="carosserie" class="form-label">Carrosserie</label>
        <select class="form-select" id="carosserie" name="carosserie" required>
            <option value="Berline" {{ $vehicule->carosserie == 'Berline' ? 'selected' : '' }}>Berline</option>
            <option value="SUV" {{ $vehicule->carosserie == 'SUV' ? 'selected' : '' }}>SUV</option>
            <option value="Coupé" {{ $vehicule->carosserie == 'Coupé' ? 'selected' : '' }}>Coupé</option>
            <option value="Break" {{ $vehicule->carosserie == 'Break' ? 'selected' : '' }}>Break</option>
            <option value="Cabriolet" {{ $vehicule->carosserie == 'Cabriolet' ? 'selected' : '' }}>Cabriolet</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="energie" class="form-label">Énergie</label>
        <select class="form-select" id="energie" name="energie" required>
            <option value="Essence" {{ $vehicule->energie == 'Essence' ? 'selected' : '' }}>Essence</option>
            <option value="Diesel" {{ $vehicule->energie == 'Diesel' ? 'selected' : '' }}>Diesel</option>
            <option value="Électrique" {{ $vehicule->energie == 'Électrique' ? 'selected' : '' }}>Électrique</option>
            <option value="Hybride" {{ $vehicule->energie == 'Hybride' ? 'selected' : '' }}>Hybride</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="boite" class="form-label">Boîte de vitesse</label>
        <select class="form-select" id="boite" name="boite" required>
            <option value="Manuelle" {{ $vehicule->boite == 'Manuelle' ? 'selected' : '' }}>Manuelle</option>
            <option value="Automatique" {{ $vehicule->boite == 'Automatique' ? 'selected' : '' }}>Automatique</option>
        </select>
    </div>

@endsection

@section('buttonText', 'Enregistrer les modifications')
