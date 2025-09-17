<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
    {
        Material::factory()->create([
            'name' => 'Cotton',
        ]);

        Material::factory()->create([
            'name' => 'Linen',
        ]);

        Material::factory()->create([
            'name' => 'Denim',
        ]);

        Material::factory()->create([
            'name' => 'Leather',
        ]);

        Material::factory()->create([
            'name' => 'Wool',
        ]);

        Material::factory()->create([
            'name' => 'Polyester',
        ]);
    }
}
