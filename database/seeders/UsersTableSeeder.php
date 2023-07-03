<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Création d'un utilisateur administrateur
        User::create([
            'name' => 'Admin',
            'first_name' => 'Admin',
            'user_phone' => '+1 (123) 456-7890',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        // Création de plusieurs utilisateurs
        User::factory()->count(10)->create([
            'role' => 'user'
        ]);
    }
}
