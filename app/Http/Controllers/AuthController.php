<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showForm()
    {
        return view('Inscription'); // nom du fichier Blade
    }

    public function register(Request $request)
    {
        // Validation des champs
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'mail' => 'required|string|email|max:255|unique:utilisateurs,email',
            'mdp' => 'required|string|min:8',
            'tel' => 'nullable|string|max:20',
            'adresse' => 'nullable|string|max:255',
            'codePostal' => 'nullable|string|max:10',
        ]);

        // Création d’un nouvel utilisateur
        Utilisateur::create([
            'nom' => $validated['nom'],
            'email' => $validated['mail'],
            'mot_de_passe' => Hash::make($validated['mdp']),
            'telephone' => $validated['tel'] ?? null,
            'adresse' => $validated['adresse'] ?? null,
            'code_postal' => $validated['codePostal'] ?? null,
        ]);

        return redirect('/')->with('success', 'Inscription réussie !');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'mail' => 'required|email',
            'mdp' => 'required',
        ]);

        // On cherche l'utilisateur par email
        $user = Utilisateur::where('email', $credentials['mail'])->first();

        if ($user && Hash::check($credentials['mdp'], $user->mot_de_passe)) {
            // Connexion réussie : on peut stocker l'utilisateur en session
            session(['user_id' => $user->id, 'user_name' => $user->nom]);
            Auth::login($user);

            return redirect('/')->with('success', 'Connexion réussie !');
        }

        return back()->withErrors([
            'mail' => 'Adresse e-mail ou mot de passe incorrect.',
        ])->withInput();
    }

    // Déconnexion
    public function logout()
    {
        session()->flush(); // supprime toutes les données de session
        return redirect('/')->with('success', 'Vous êtes déconnecté.');
    }
}

