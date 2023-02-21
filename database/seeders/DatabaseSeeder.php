<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zone;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Zone::factory()->create([
            'name' => 'Green Zone',
            'price_per_hour' => 100,
        ]);

        Zone::factory()->create([
            'name' => 'Yellow Zone',
            'price_per_hour' => 200,
        ]);

        Zone::factory()->create([
            'name' => 'Red Zone',
            'price_per_hour' => 300,
        ]);
    }
}
