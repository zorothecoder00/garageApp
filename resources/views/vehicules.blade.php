@extends('layouts.list')       

@section('title' ,'Liste des véhicules')

@section('pageTitle' ,'Liste des véhicules')

@section('tableHeader')
	<th>Numéro d'immatriculation</th>
	<th>Marque</th>  
	<th>Modèle</th>
	<th>Couleur</th>
	<th>Actions</th>  
@endsection()

@section('tableBody')
 
	@foreach($vehicules as $vehicule)

		<td>{{ $vehicule->immatriculation }}</td>
		<td>{{ $vehicule->marque }}</td>
		<td>{{ $vehicule->modele }}</td>
		<td>{{ $vehicule->couleur }}</td>

		<td>
		    {{-- Bouton Modifier --}}
		    <a href="{{ route('updatevehicule', $vehicule->id) }}" class="btn btn-warning btn-sm">Modifier</a>

		    {{-- Bouton Supprimer avec formulaire --}} 
		    <form action="{{ route('deletevehicule', $vehicule->id) }}" method="POST" style="display:inline;">
		        @csrf
		        @method('DELETE')
		        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ce véhicule ?')">Supprimer</button>
		    </form>
		</td>

				
	@endforeach
	
@endsection		
	