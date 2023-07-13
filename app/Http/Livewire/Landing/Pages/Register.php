<?php

namespace App\Http\Livewire\Landing\Pages;

use App\Models\User;
use App\Providers\User\UserService;
use Livewire\Component;

class Register extends Component
{

    private UserService $userService;
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

    public function boot( UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register()
    {
        $userData = $this->validate();
       $message =  $this->userService->addUser($userData);

       dd($message);

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
//        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.landing.pages.register');
    }
}
