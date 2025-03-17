@extends('layouts.form')

@section('title', 'Créer un compte')
@section('formTitle', 'Inscription')
@section('formAction', route('register'))

@section('formFields')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="col-12">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="col-12">
        <label for="email" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="col-12">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="col-12">
        <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>
@endsection

@section('buttonText', 'S\'inscrire')

@section('formMethod')
@endsection

@section('formFields')
    <div class="d-grid mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Retour au Dashboard</a>
    </div>
@endsection
