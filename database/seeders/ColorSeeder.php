<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    public function run(): void
    {
        Color::factory()->create([
            'name' => 'Black',
        ]);

        Color::factory()->create([
            'name' => 'Beige',
        ]);

        Color::factory()->create([
            'name' => 'Blue',
        ]);

        Color::factory()->create([
            'name' => 'Grey',
        ]);

        Color::factory()->create([
            'name' => 'Orange',
        ]);

        Color::factory()->create([
            'name' => 'Pink',
        ]);

        Color::factory()->create([
            'name' => 'Yellow',
        ]);
        Color::factory()->create([
            'name' => 'Brown',
        ]);
        Color::factory()->create([
            'name' => 'Green',
        ]);
    }
}
