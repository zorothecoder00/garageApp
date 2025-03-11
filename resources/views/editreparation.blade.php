@extends('layouts.form')

@section('title', 'Modification de la réparation')

@section('formTitle', 'Modifier une réparation')

@section('formAction', route('updatereparation', $reparation->id))

@section('formMethod')   
    @method('PUT')  
@endsection

@section('formFields')
    <div class="col-md-6">
        <label for="technicien_id" class="form-label">Technicien</label>
        <select class="form-select" id="technicien_id" name="technicien_id" required>
            <option value="">Sélectionner un technicien</option>
            @foreach($techniciens as $technicien)
                <option value="{{ $technicien->id }}" {{ $reparation->technicien_id == $technicien->id ? 'selected' : '' }}>
                    {{ $technicien->nom }} {{ $technicien->prenom }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label for="vehicule_id" class="form-label">Véhicule</label>
        <select class="form-select" id="vehicule_id" name="vehicule_id" required>
            <option value="">Sélectionner un véhicule</option>
            @foreach($vehicules as $vehicule)
                <option value="{{ $vehicule->id }}" {{ $reparation->vehicule_id == $vehicule->id ? 'selected' : '' }}>
                    {{ $vehicule->immatriculation }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label for="date" class="form-label">Date de la réparation</label>
        <input type="date" class="form-control" id="date" name="date" value="{{ $reparation->date }}" required>
    </div>

    <div class="col-md-6">
        <label for="duree_main_oeuvre" class="form-label">Durée de la main d'œuvre</label>
        <input type="number" class="form-control" id="duree_main_oeuvre" name="duree_main_oeuvre" value="{{ $reparation->duree_main_oeuvre }}" required>
    </div>

    <div class="col-md-6">
        <label for="objet_reparation" class="form-label">Objet réparé</label>
        <input type="text" class="form-control" id="objet_reparation" name="objet_reparation" value="{{ $reparation->objet_reparation }}" required>
    </div>
@endsection

@section('buttonText', 'Enregistrer les modifications')
