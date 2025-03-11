@extends('layouts.form')

@section('title', 'Modification du technicien')

@section('formTitle', 'Modification du technicien')

@section('formAction', route('updatetechnicien', $technicien->id))

@section('formMethod')
    @method('PUT')
@endsection

@section('formFields')
    <div class="col-md-6">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="{{ $technicien->nom }}" required>
    </div>

    <div class="col-md-6">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $technicien->prenom }}" required>
    </div>

    <div class="col-md-6">
        <label for="specialite" class="form-label">Spécialité</label>
        <select class="form-select" id="specialite" name="specialite" required>
            <option value="Mécanique" {{ $technicien->specialite == 'Mécanique' ? 'selected' : '' }}>Mécanique</option>
            <option value="Carosserie" {{ $technicien->specialite == 'Carosserie' ? 'selected' : '' }}>Carosserie</option>
            <option value="Électromécanique" {{ $technicien->specialite == 'Électromécanique' ? 'selected' : '' }}>Électromécanique</option>
            <option value="Peinture" {{ $technicien->specialite == 'Peinture' ? 'selected' : '' }}>Peinture</option>
        </select>
    </div>
@endsection

@section('buttonText', 'Enregistrer les modifications')
  