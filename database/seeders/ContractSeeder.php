<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Contract;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 5; $i <= 10; $i++) {
            Contract::create([
                'fk_freight_announcement_id' => $i,
                'fk_transport_offer_id' => $i,
                'agreement_date' => now()->subDays(rand(1, 30)),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $this->command->info('Seeder "ContractsTableSeeder" exécuté avec succès!');
    }
}
