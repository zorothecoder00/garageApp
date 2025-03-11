<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Afficher le formulaire de connexion
    public function loginForm()
    {
        return view('auth.login');
    }

    //Connexion de l'utilisateur
    public function login(Request $request)
    {
        $validated = $request->validate([
            "email" => "required|email",
            "password" => "required|string",
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard')->with('success', 'Connexion réussie.');
        }

        return back()->withErrors(['email' => 'Identifiants incorrects.'])->withInput();
        
    }

    // Afficher le formulaire d'inscription
    public function registerForm()
    {
        return view('auth.register');
    }

    // Traiter l'inscription
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);  

        return redirect()->route('dashboard')->with('success', 'Inscription réussie.');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('dashboard')->with('success', 'Déconnexion réussie.');
    
    }
}
