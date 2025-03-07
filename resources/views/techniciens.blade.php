@extends('layouts.list')

@section('title' ,'Liste des techniciens')

@section('pageTitle' ,'Liste des techniciens')

@section('tableHeader')
	<th>Nom</th>
	<th>Prénom</th>
	<th>Spécialité</th>    
@endsection()

@section('tableBody')  

	@foreach($techniciens as $technicien)

		<td>{{ $technicien->nom }}</td>
		<td>{{ $technicien->prenom }}</td>
		<td>{{ $technicien->specialite }}</td>
				
	@endforeach
	
@endsection