<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'T-shirts',
        ]);

        Category::factory()->create([
            'name' => 'Coats',
        ]);

        Category::factory()->create([
            'name' => 'Skirts',
        ]);

        Category::factory()->create([
            'name' => 'Jackets',
        ]);

        Category::factory()->create([
            'name' => 'Hoodies',
        ]);

        Category::factory()->create([
            'name' => 'Pants',
        ]);
    }
}
