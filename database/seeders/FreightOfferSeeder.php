<?php
namespace Database\Seeders;

use App\Models\FreightOffer;
use Illuminate\Database\Seeder;

class FreightOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 1; $i <= 7; $i++) {
            FreightOffer::create([
                'fk_transport_announcement_id' => $i,
                'fk_shipper_id' => $i,
                'price' => 100.00,
                'weight' => 20,
                'description' => "description ".$i,
                'statut' => 'Pending',
            ]);
        }

        $this->command->info('Seeder "FreightOfferSeeder" executed successfully!');
    }
}
