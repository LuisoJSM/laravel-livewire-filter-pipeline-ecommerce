<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::factory()->create([
            'name' => 'Levis',
        ]);

        Brand::factory()->create([
            'name' => 'Nike',
        ]);

        Brand::factory()->create([
            'name' => 'Adidas',
        ]);

        Brand::factory()->create([
            'name' => 'Zara',
        ]);

        Brand::factory()->create([
            'name' => 'Lacoste',
        ]);
    }
}
