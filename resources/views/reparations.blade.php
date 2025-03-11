@extends('layouts.list') 

@section('title' ,'Liste des Réparations')

@section('pageTitle' ,'Liste des réparations')

@section('tableHeader')
	<th>Véhicule réparé</th>
	<th>Technicien</th>
	<th>Objet réparé</th>
	<th>Date de la réparation</th>
	<th>Actions</th>      
@endsection

@section('tableBody')  

	@foreach($reparations as $reparation)

		<td>{{ $reparation->vehicule->immatriculation }}</td>
		<td>{{ $reparation->technicien->nom }}  {{ $reparation->technicien->prenom }}</td>
		<td>{{ $reparation->objet_reparation }}</td>
		<td>{{ $reparation->date }}</td>
		<td>
		    {{-- Bouton Modifier --}}
		    <a href="{{ route('updatereparation', $reparation->id) }}" class="btn btn-warning btn-sm">Modifier</a>

		    {{-- Bouton Supprimer avec formulaire --}}
		    <form action="{{ route('deletereparation', $reparation->id) }}" method="POST" style="display:inline;">
		        @csrf
		        @method('DELETE')
		        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer cette réparation ?')">Supprimer</button>
		    </form>
		</td>
				
	@endforeach
	
@endsection