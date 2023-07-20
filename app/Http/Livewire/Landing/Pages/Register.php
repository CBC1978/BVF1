<?php

namespace App\Http\Livewire\Landing\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $first_name;
    public $user_phone;
    public $email;
    public $username;
    public $password;
    public $password_confirmation;
    public $role;

    public function register()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'first_name' => 'required',
            'user_phone' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // Redirect to the dashboard or desired page upon successful registration
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.landing.pages.register');
    }
}
