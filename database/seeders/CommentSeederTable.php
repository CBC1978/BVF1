<?php

namespace Database\Seeders;

use App\Models\comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        comment::create([
            'mark' => 3.5,
            'comment' => 'mark 1',
            'fk_contract_transport_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
