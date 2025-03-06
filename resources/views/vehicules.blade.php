<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
</head>
<body>

	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th>Numéro d'immatriculation</th>
				<th>Marque</th>
				<th>Modèle</th>
				<th>Couleur</th>
			</tr>
		</thead>

		<tbody>
			@foreach($vehicules as $vehicule)
			<tr>

				<td>{{ $vehicule->immatriculation }}</td>
				<td>{{ $vehicule->marque }}</td>
				<td>{{ $vehicule->modele }}</td>
				<td>{{ $vehicule->couleur }}</td>
				
			</tr>
			@endforeach
		</tbody>
		
	</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>