<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
	<title>@yield('title', 'Ajouter une entité')</title>
</head>  
<body>
	<div class="container mt-5">
		<div class="card shadow p-4">
			<h2 class="text-center mb-4">@yield('formTitle', 'Ajouter un Véhicule')</h2>  

			<form method="POST" action="@yield('formAction', route('storevehicule'))">
				@csrf
				<div class="row g-3">
					@yield('formFields')
				</div>

				<div class="d-grid mt-4">
					<button type="submit" class="btn btn-primary">@yield('buttonText', 'Ajouter le Véhicule')</button>
				</div>
			</form>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
