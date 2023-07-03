<?php

namespace Database\Seeders;

use App\Models\ContractTransport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractTransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContractTransport::create([
            'agreement_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'fk_freight_offert_id' => 17,
            'fk_transport_offer_id' => 1,

        ]);

    }
}
