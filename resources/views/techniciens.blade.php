@extends('layouts.list')    

@section('title' ,'Liste des techniciens')

@section('pageTitle' ,'Liste des techniciens')

@section('tableHeader')
	<th>Nom</th>
	<th>Prénom</th>
	<th>Spécialité</th>
	<th>Actions</th>       
@endsection()  

@section('tableBody')  

	@foreach($techniciens as $technicien)

		<td>{{ $technicien->nom }}</td>
		<td>{{ $technicien->prenom }}</td>
		<td>{{ $technicien->specialite }}</td>
		<td>
		    {{-- Bouton Modifier --}}
		    <a href="{{ route('updatetechnicien', $technicien->id) }}" class="btn btn-warning btn-sm">Modifier</a>

		    {{-- Bouton Supprimer avec formulaire --}}
		    <form action="{{ route('deletetechnicien', $technicien->id) }}" method="POST" style="display:inline;">
		        @csrf
		        @method('DELETE')
		        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ce technicien ?')">Supprimer</button>
		    </form>
		</td>
				
	@endforeach
	
@endsection