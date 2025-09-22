<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Material;
use App\Models\Product;
use App\Models\Review;
use App\Models\Size;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Skirts
            [
                'name' => 'Skirt Leather Black',
                'slug' => 'skirt-leather-black',
                'image' => 'images/skirts/falda-cuero-negra.png',
                'category' => 'Skirts',
                'brand' => 'Zara',
                'color' => 'Black',
                'material' => 'Leather',
                'size' => 'M',
                'price' => 49,
            ],
            [
                'name' => 'Skirt Denim Blue',
                'slug' => 'skirt-denim-blue',
                'image' => 'images/skirts/falda-vaquera-azul.png',
                'category' => 'Skirts',
                'brand' => 'Levis',
                'color' => 'Blue',
                'material' => 'Denim',
                'size' => 'M',
                'price' => 59,
            ],

            // T-shirts
            [
                'name' => 'T-shirt Linen Beige',
                'slug' => 't-shirt-linen-beige',
                'image' => 'images/t-shirts/camiseta-lino-beige.png',
                'category' => 'T-shirts',
                'brand' => 'Zara',
                'color' => 'Beige',
                'material' => 'Linen',
                'size' => 'L',
                'price' => 29,
            ],
            [
                'name' => 'T-shirt Cotton Yellow',
                'slug' => 't-shirt-cotton-yellow',
                'image' => 'images/t-shirts/camiseta-amarilla-algodon.png',
                'category' => 'T-shirts',
                'brand' => 'Nike',
                'color' => 'Yellow',
                'material' => 'Cotton',
                'size' => 'M',
                'price' => 25,
            ],
            [
                'name' => 'T-shirt Cotton Grey',
                'slug' => 't-shirt-cotton-grey',
                'image' => 'images/t-shirts/camiseta-gris-algodon.png',
                'category' => 'T-shirts',
                'brand' => 'Nike',
                'color' => 'Grey',
                'material' => 'Cotton',
                'size' => 'L',
                'price' => 25,
            ],
            [
                'name' => 'T-shirt Cotton Blue',
                'slug' => 't-shirt-cotton-blue',
                'image' => 'images/t-shirts/camiseta-azul-algodon.png',
                'category' => 'T-shirts',
                'brand' => 'Adidas',
                'color' => 'Blue',
                'material' => 'Cotton',
                'size' => 'M',
                'price' => 27,
            ],

            // Jackets
            [
                'name' => 'Jacket Denim Blue',
                'slug' => 'jacket-denim-blue',
                'image' => 'images/jackets/chaqueta-vaquera-azul.png',
                'category' => 'Jackets',
                'brand' => 'Levis',
                'color' => 'Blue',
                'material' => 'Denim',
                'size' => 'L',
                'price' => 89,
            ],
            [
                'name' => 'Jacket Cotton Blue',
                'slug' => 'jacket-cotton-blue',
                'image' => 'images/jackets/chaqueta-algodon-azul.png',
                'category' => 'Jackets',
                'brand' => 'Zara',
                'color' => 'Blue',
                'material' => 'Cotton',
                'size' => 'M',
                'price' => 79,
            ],
            [
                'name' => 'Jacket Wool Brown',
                'slug' => 'jacket-wool-brown',
                'image' => 'images/jackets/chaqueta-lana-marron.png',
                'category' => 'Jackets',
                'brand' => 'Lacoste',
                'color' => 'Brown',
                'material' => 'Wool',
                'size' => 'L',
                'price' => 95,
            ],
            [
                'name' => 'Jacket Leather Black',
                'slug' => 'jacket-leather-black',
                'image' => 'images/jackets/chaqueta-cuero-negra.png',
                'category' => 'Jackets',
                'brand' => 'Zara',
                'color' => 'Black',
                'material' => 'Leather',
                'size' => 'M',
                'price' => 120,
            ],

            // Pants
            [
                'name' => 'Pants Denim Blue',
                'slug' => 'pants-denim-blue',
                'image' => 'images/pants/pantalon-vaquero-azul.png',
                'category' => 'Pants',
                'brand' => 'Levis',
                'color' => 'Blue',
                'material' => 'Denim',
                'size' => 'L',
                'price' => 65,
            ],
            [
                'name' => 'Pants Corduroy Brown',
                'slug' => 'pants-corduroy-brown',
                'image' => 'images/pants/pantalon-pana-marron.png',
                'category' => 'Pants',
                'brand' => 'Zara',
                'color' => 'Brown',
                'material' => 'Cotton',
                'size' => 'M',
                'price' => 70,
            ],
            [
                'name' => 'Pants Leather Yellow',
                'slug' => 'pants-leather-yellow',
                'image' => 'images/pants/pantalon-cuero-amarillo.png',
                'category' => 'Pants',
                'brand' => 'Nike',
                'color' => 'Yellow',
                'material' => 'Leather',
                'size' => 'M',
                'price' => 110,
            ],
            [
                'name' => 'Pants Leather Brown',
                'slug' => 'pants-leather-brown',
                'image' => 'images/pants/pantalon-cuero-marron.png',
                'category' => 'Pants',
                'brand' => 'Zara',
                'color' => 'Brown',
                'material' => 'Leather',
                'size' => 'S',
                'price' => 105,
            ],

            // Coats
            [
                'name' => 'Coat Grey',
                'slug' => 'coat-grey',
                'image' => 'images/coats/abrigo-gris.png',
                'category' => 'Coats',
                'brand' => 'Zara',
                'color' => 'Grey',
                'material' => 'Wool',
                'size' => 'L',
                'price' => 150,
            ],
            [
                'name' => 'Coat Blue',
                'slug' => 'coat-blue',
                'image' => 'images/coats/abrigo-azul.png',
                'category' => 'Coats',
                'brand' => 'Zara',
                'color' => 'Blue',
                'material' => 'Wool',
                'size' => 'L',
                'price' => 155,
            ],
            [
                'name' => 'Coat Black',
                'slug' => 'coat-black',
                'image' => 'images/coats/abrigo-negro.png',
                'category' => 'Coats',
                'brand' => 'Zara',
                'color' => 'Black',
                'material' => 'Wool',
                'size' => 'S',
                'price' => 160,
            ],
            [
                'name' => 'Coat Orange',
                'slug' => 'coat-orange',
                'image' => 'images/coats/abrigo-naranja.png',
                'category' => 'Coats',
                'brand' => 'Zara',
                'color' => 'Orange',
                'material' => 'Wool',
                'size' => 'M',
                'price' => 140,
            ],
            [
                'name' => 'Coat Green',
                'slug' => 'coat-green',
                'image' => 'images/coats/abrigo-verde.png',
                'category' => 'Coats',
                'brand' => 'Zara',
                'color' => 'Green',
                'material' => 'Wool',
                'size' => 'XL',
                'price' => 145,
            ],

            // Hoodies
            [
                'name' => 'Hoodie Pink',
                'slug' => 'hoodie-pink',
                'image' => 'images/hoodies/sudadera-rosa.png',
                'category' => 'Hoodies',
                'brand' => 'Adidas',
                'color' => 'Pink',
                'material' => 'Cotton',
                'size' => 'XL',
                'price' => 55,
            ],
            [
                'name' => 'Hoodie Blue',
                'slug' => 'hoodie-blue',
                'image' => 'images/hoodies/sudadera-azul.png',
                'category' => 'Hoodies',
                'brand' => 'Adidas',
                'color' => 'Blue',
                'material' => 'Cotton',
                'size' => 'L',
                'price' => 60,
            ],
            [
                'name' => 'Hoodie Grey',
                'slug' => 'hoodie-grey',
                'image' => 'images/hoodies/sudadera-gris.png',
                'category' => 'Hoodies',
                'brand' => 'Nike',
                'color' => 'Grey',
                'material' => 'Cotton',
                'size' => '2XL',
                'price' => 58,
            ],
            [
                'name' => 'Hoodie Black',
                'slug' => 'hoodie-black',
                'image' => 'images/hoodies/sudadera-negra.png',
                'category' => 'Hoodies',
                'brand' => 'Nike',
                'color' => 'Black',
                'material' => 'Cotton',
                'size' => 'L',
                'price' => 58,
            ],
            [
                'name' => 'Hoodie Orange',
                'slug' => 'hoodie-orange',
                'image' => 'images/hoodies/sudadera-naranja.png',
                'category' => 'Hoodies',
                'brand' => 'Nike',
                'color' => 'Orange',
                'material' => 'Cotton',
                'size' => 'M',
                'price' => 60,
            ],
        ];

        foreach ($products as $data) {
            $product = Product::factory()->create([
                'name'        => $data['name'],
                'slug'        => $data['slug'],
                'price'       => $data['price'],
                'image'       => $data['image'],
                'category_id' => Category::where('name', $data['category'])->first()->id,
                'brand_id'    => Brand::where('name', $data['brand'])->first()->id,
                'color_id'    => Color::where('name', $data['color'])->first()->id,
                'material_id' => Material::where('name', $data['material'])->first()->id,
                'size_id'     => Size::where('name', $data['size'])->first()->id,
            ]);

            // Create random reviews (between 6 and 12 per product)
            $product->reviews()->createMany(
                Review::factory()->count(random_int(6, 12))->make([
                    'rating' => random_int(1, 5),
                ])->toArray()
            );
        }
    }
}
