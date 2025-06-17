<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Asus ROG phone 9',
                'description' => 'Smartphone Gaming',
                'price' => 22599000,
                'stock' => 50,
                'image' => 'https://dlcdnwebimgs.asus.com/gain/973395F8-FFF9-4F1D-BF8F-1BBADD4CF04D',
                'product_category_id' => 1
            ],
            [
                'name' => 'Buku Pemrograman',
                'description' => 'Buku Tentang Pemrograman',
                'price' => 89000,
                'stock' => 50,
                'image' => 'https://deepublishstore.com/wp-content/uploads/2016/10/51d49e5dc7e2ca925c8cb40ec1c988a4-1-1200x1707.jpg',
                'product_category_id' => 2
            ],
            [
                'name' => 'Jaket Kulit',
                'description' => 'Jaket nyaman bahan kulit',
                'price' => 350000,
                'stock' => 50,
                'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/111/MTA-141691899/brd-44261_jaket-kulit-motor-pria-jaket-keren-jaket-semi-pria_full01-79942d54.jpg',
                'product_category_id' => 3
            ],
        ]);
    }
}
