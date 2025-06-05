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
                'image' => 'https://shorturl.at/ZeJjg',
                'product_category_id' => 1
            ],
            [
                'name' => 'Buku Pemrograman',
                'description' => 'Buku Tentang Pemrograman',
                'price' => 89000,
                'stock' => 50,
                'image' => 'https://shorturl.at/t0HHj',
                'product_category_id' => 2
            ],
            [
                'name' => 'Jaket Kulit',
                'description' => 'Jaket nyaman bahan kulit',
                'price' => 350000,
                'stock' => 50,
                'image' => 'https://shorturl.at/epWDK',
                'product_category_id' => 3
            ],
        ]);
    }
}
