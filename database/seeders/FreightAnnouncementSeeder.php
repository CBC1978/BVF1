<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Shipper;

use App\Models\FreightAnnouncement;


class FreightAnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shipper = Shipper::first(); // Récupère le premier enregistrement du modèle Shipper

        for ($i = 1; $i <= 10; $i++) {
            FreightAnnouncement::create([
                'fk_shipper_id' => $shipper->id,
                'origin' => 'City A ' . $i,
                'destination' => 'City B ' . $i,
                'limit_date' => now()->addDays(rand(1, 30)),
                'weight' => rand(500, 2000) / 100,
                'volume' => rand(10, 100) / 100,
                'description' => 'This is the freight announcement number ' . $i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $this->command->info('Seeder "FreightAnnouncementSeeder" exécuté avec succès!');
    }
}
