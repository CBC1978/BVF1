<?php

namespace App\Http\Livewire\Landing\Pages;

//  Use Models/Users;


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
        $this->validate();

        User::create([
            'name' => $this->name,
            'first_name' => $this->first_name,
            'user_phone' => $this->user_phone,
            'email' => $this->email,
            'username' => $this->username,
            'password' => Hash::make($this->password),
            'role' => $this->role,
        ]);
        session()->flash('success', 'Inscription réussie.');

        // $this->reset([
        //     'name',
        //     'first_name',
        //     'user_phone',
        //     'email',
        //     'username',
        //     'password',
        //     'password_confirmation',
        //     'role',
        // ]);


        // redirection apres inscription
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.landing.pages.register');
    }
}
