<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Shipper;

class ShippersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Shipper::create([
                'fk_user_id' => $i,
                'company_name' => 'Company ' . $i,
                'address' => 'Address ' . $i,
                'phone' => '+1 (123) 456-7890',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    
        $this->command->info('Seeder "ShippersTableSeeder" exécuté avec succès!');
    }
}
    