<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\ContractTransport;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        ContractTransport::factory()->count(10)->create();
//        $this->call(FreightAnnouncementSeeder::class);
//        $this->call(CarrierSeeder::class);
//        $this->call(ContractsTableSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
