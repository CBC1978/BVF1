<?php

namespace Database\Seeders;
use App\Models\TransportAnnouncement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportAnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        for ($i = 4; $i <= 10; $i++) {
            TransportAnnouncement::create([
                'fk_carrier_id' => $i,
                'origin' => 'Origin ' . $i,
                'destination' => 'Destination ' . $i,
                'limit_date' => now(),
                'vehicule_type' => 'Type ' . $i,
                'weight' => $i * 100,
                'description' => 'Description ' . $i,
            ]);
        }

        $this->command->info('Seeder "TransportAnnouncementSeeder" exécuté avec succès!');
    }
    }

