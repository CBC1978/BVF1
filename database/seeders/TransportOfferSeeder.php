<?php

namespace Database\Seeders;
use App\Models\TransportOffer;

use Illuminate\Database\Seeder;


class TransportOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 7; $i++) {
            TransportOffer::create([
                'fk_freight_announcement_id' => $i,
                'fk_carrier_id' => $i,
                'price' => 100,
                'status' => 'active',
            ]);
        }

        $this->command->info('Seeder "TransportOfferSeeder" exécuté avec succès!');
    }
}
