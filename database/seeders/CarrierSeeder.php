<?php

namespace Database\Seeders;
use App\Models\Carrier;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 13; $i <= 23; $i++) {
            Carrier::create([
                'fk_user_id' => $i,
                'company_name' => 'Company ' . $i,
                'address' => 'Address ' . $i,
                'phone' => '+1 (123) 456-7890',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }


        $this->command->info('Seeder "CarrierSeeder" exécuté avec succès!');
    }
}
