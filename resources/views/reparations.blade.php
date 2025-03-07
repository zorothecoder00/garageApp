@extends('layouts.list')

@section('title' ,'Liste des Réparations')

@section('pageTitle' ,'Liste des réparations')

@section('tableHeader')
	<th>Véhicule réparé</th>
	<th>Technicien</th>
	<th>Objet réparé</th>
	<th>Date de la réparation</th>      
@endsection

@section('tableBody')  

	@foreach($reparations as $reparation)

		<td>{{ $reparation->vehicule->immatriculation }}</td>
		<td>{{ $reparation->technicien->nom }}  {{ $reparation->technicien->prenom }}</td>
		<td>{{ $reparation->objet_reparation }}</td>
		<td>{{ $reparation->date }}</td>
				
	@endforeach
	
@endsection