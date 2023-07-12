<?php

namespace App\Http\Livewire\Landing\Pages;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.landing.pages.login');
    }

    public function login()
    {
        // Logique de validation et d'authentification
    }
}
