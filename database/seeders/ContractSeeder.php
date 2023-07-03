<?php

namespace Database\Seeders;

use App\Models\ContractTransport;
use Illuminate\Database\Seeder;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        ContractTransport::factory()->count(10);
        for ($i = 1; $i <= 7; $i++) {
            ContractTransport::create([
                'fk_freight_offer_id' => 17,
                'fk_transport_offer_id' => 1,
                'agreement_date' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $this->command->info('Seeder "ContractsTableSeeder" exécuté avec succès!');
    }
}
