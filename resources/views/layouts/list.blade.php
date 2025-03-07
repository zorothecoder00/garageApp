<!DOCTYPE html>  
<html>
<head>  
	<meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
	<title>@yield('title', 'Liste des Entités')</title>    
</head>  
<body>

	<div class="container mt-4">

        <h1>@yield('pageTitle', 'Liste des Entités')</h1>

		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					@yield('tableHeader')
				</tr>
			</thead>

			<tbody>
				@yield('tableBody')
			</tbody>
			
		</table>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
