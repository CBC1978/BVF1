<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

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

    protected $rules = [
        'name' => 'required',
        'first_name' => 'required',
        'user_phone' => 'required',
        'email' => 'required|email|unique:users',
        'username' => 'required|unique:users',
        'password' => 'required|min:6|confirmed',
        'role' => 'required',
    ];

    public function register()
    {
        $validatedData = $this->validate();

        User::create([
            'name' => $validatedData['name'],
            'first_name' => $validatedData['first_name'],
            'user_phone' => $validatedData['user_phone'],
            'email' => $validatedData['email'],
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

        session()->flash('success', 'Inscription réussie.');
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.register')
            ->layout('layouts.register-layout');
    }
}
