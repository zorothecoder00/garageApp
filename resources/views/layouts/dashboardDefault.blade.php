<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <h4>Dashboard</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('dashboard') }}">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownTechniciens" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Techniciens</a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownTechniciens">
                        <li><a class="dropdown-item text-black" href="{{ route('techniciens') }}" >Nos techniciens</a></li>
                        <li><a class="dropdown-item text-black" href="{{ route('createtechnicien') }}">Ajouter un technicien</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownVehicules" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Véhicules</a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownVehicules">
                        <li><a class="dropdown-item text-black" href="{{ route('vehicules') }}">Nos véhicules</a></li>
                        <li><a class="dropdown-item text-black" href="{{ route('createvehicule') }}">Ajouter un véhicule</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownReparations" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Réparations</a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownReparations">
                        <li><a class="dropdown-item text-black" href="{{ route('reparations') }}">Nos réparations</a></li>
                        <li><a class="dropdown-item text-black" href="{{ route('createreparation') }}">Ajouter une réparation</a></li> 
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Statistiques</a>
                </li>
            </ul>
        </nav>

        <!-- Contenu principal -->
        <main class="p-4" style="width: 1200px; background-color: blueviolet; overflow-x: hidden;">
            <div class="d-flex">
                <div class="row" style="width: 1000px;">
                    
                </div>

                <div class="row" style="width: 1000px;">
                    
                </div>
            </div>
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
