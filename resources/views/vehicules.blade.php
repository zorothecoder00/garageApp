@extends('layouts.list')

@section('title' ,'Liste des véhicules')

@section('pageTitle' ,'Liste des véhicules')

@section('tableHeader')
	<th>Numéro d'immatriculation</th>
	<th>Marque</th>
	<th>Modèle</th>
	<th>Couleur</th>
@endsection()

@section('tableBody')

	@foreach($vehicules as $vehicule)

		<td>{{ $vehicule->immatriculation }}</td>
		<td>{{ $vehicule->marque }}</td>
		<td>{{ $vehicule->modele }}</td>
		<td>{{ $vehicule->couleur }}</td>
				
	@endforeach
	
@endsection		
	