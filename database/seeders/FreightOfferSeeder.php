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
        for ($i = 4; $i <= 10; $i++) {
            FreightOffer::create([
                'fk_freight_announcement_id' => $i,
                'fk_carrier_id' => $i,
                'price' => 100.00,
                'status' => 'Pending',
            ]);
        }

        $this->command->info('Seeder "FreightOfferSeeder" executed successfully!');
    }
}
