<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Authentification réussie
            session()->flash('success', 'Connexion réussie.');
            return redirect()->route('dashboard'); 
        } else {
            // Erreur d'authentification
            session()->flash('error', 'Identifiants incorrects. Veuillez réessayer.');
        }
    }

    public function render()
    {
        return view('livewire.login')
            ->layout('layouts.login-layout');
    
    // public $email;
    // public $password;

    // public function render()
    // {
    //     return view('livewire.login')
    //         ->layout('layouts.login-layout'); //  le layout spécifique pour la page de connexion
    // }

    // public function login()
    // {
    //     $credentials = [
    //         'email' => $this->email,
    //         'password' => $this->password,
    //     ];

    //     if (Auth::attempt($credentials)) {
    //         // L'authentification a réussi, redirige vers le dashboard
    //         return redirect()->route('dashboard');
    //     } else {
    //         // L'authentification a échoué, affiche un message d'erreur
    //         session()->flash('error', 'Invalid credentials. Please try again.');
        }
    }

