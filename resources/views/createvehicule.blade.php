<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/style.css')  }}">
	<title></title>
</head>  
<body>
	<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Ajouter un Véhicule</h2>
        
        <form method="POST" action="{{ route('storevehicule') }}">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="immatriculation" class="form-label">Immatriculation</label>
                    <input type="text" class="form-control" id="immatriculation" name="immatriculation" required>
                </div>

                <div class="col-md-6">
                    <label for="marque" class="form-label">Marque</label>
                    <input type="text" class="form-control" id="marque" name="marque" required>
                </div>

                <div class="col-md-6">
                    <label for="modele" class="form-label">Modèle</label>
                    <input type="text" class="form-control" id="modele" name="modele" required>
                </div>

                <div class="col-md-6">
                    <label for="couleur" class="form-label">Couleur</label>
                    <input type="text" class="form-control" id="couleur" name="couleur" required>
                </div>

                <div class="col-md-6">
                    <label for="annee" class="form-label">Année</label>
                    <input type="number" class="form-control" id="annee" name="annee" required>
                </div>

                <div class="col-md-6">
                    <label for="kilometrage" class="form-label">Kilométrage</label>
                    <input type="number" class="form-control" id="kilometrage" name="kilometrage" required>
                </div>

                <div class="col-md-6">
                    <label for="carosserie" class="form-label">Carrosserie</label>
                    <select class="form-select" id="carosserie" name="carosserie" required>
                        <option value="Berline">Berline</option>
                        <option value="SUV">SUV</option>
                        <option value="Coupé">Coupé</option>
                        <option value="Break">Break</option>
                        <option value="Cabriolet">Cabriolet</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="energie" class="form-label">Énergie</label>
                    <select class="form-select" id="energie" name="energie" required>
                        <option value="Essence">Essence</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Électrique">Électrique</option>
                        <option value="Hybride">Hybride</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="boite" class="form-label">Boîte de vitesse</label>
                    <select class="form-select" id="boite" name="boite" required>
                        <option value="Manuelle">Manuelle</option>
                        <option value="Automatique">Automatique</option>
                    </select>
                </div>
            </div>

            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary">Ajouter le Véhicule</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>