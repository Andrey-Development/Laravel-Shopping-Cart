<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// ProductsSeeder
class DatabaseSeeder_4 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Product 1', 'image' => 'https://lh4.googleusercontent.com/proxy/GmvFWsSgTRtMBhGK5KFOagPCCldriXvZbsE6up0uMwTp7DuYlkxuHPlb80WtuFEOwk52uH-4oXRj5apL3vh8_wDNLR91DAAY4nqepvT9yA0-BP0HzlBgKXmPSCOKTnSjbgnDPT-kdw', 'description' => 'Description of product 1', 'unit_price' => 100.99, 'quantity' => 100],
            ['name' => 'Product 2', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDUihjkXG7HZ-o9ExZigsxY65atFtuZOSdQg&s', 'description' => 'Description of product 2', 'unit_price' => 25.50, 'quantity' => 150],
            ['name' => 'Product 3', 'image' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh8-snYNoNLrVpuAtL1EcO-tLQyA7I4zi0hkYd-I9oUmGzlBNV_7Mhl_4mzTSm7oL-6Gum7tLZyFbEERBby28sl_UnRw4QT9kabzXhEWfGvHIErl3T97-j5Ldu8aBxaPnpZSZczBms98XA/s1600/bussola+nomeada.jpg', 'description' => 'Description of product 3', 'unit_price' => 39.30, 'quantity' => 200],
            ['name' => 'Product 4', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Plastic-compass.jpg/640px-Plastic-compass.jpg', 'description' => 'Description of product 4', 'unit_price' => 9.99, 'quantity' => 80],
            ['name' => 'Product 5', 'image' => 'https://wx.mlcdn.com.br/ponzi/production/portaldalu/43511_01.jpg', 'description' => 'Description of product 5', 'unit_price' => 24.99, 'quantity' => 120],
            ['name' => 'Product 6', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiuNbg4RgbYU6KVB26XEJimShceSlHcB3hBg&s', 'description' => 'Description of product 6', 'unit_price' => 5.75, 'quantity' => 300],
            ['name' => 'Product 7', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAA1PrUTPw4zq-XaFGUynaC1R1nSCa-HyNKA&s', 'description' => 'Description of product 7', 'unit_price' => 45.99, 'quantity' => 50],
            ['name' => 'Product 8', 'image' => 'https://img.odcdn.com.br/wp-content/uploads/2023/12/imagem_2023-12-28_022827346.png', 'description' => 'Description of product 8', 'unit_price' => 18.60, 'quantity' => 90],
            ['name' => 'Product 9', 'image' => 'https://museuweg.net/blog/wp-content/uploads/2020/03/05-de-marco-de-2020.png', 'description' => 'Description of product 9', 'unit_price' => 12.40, 'quantity' => 70],
            ['name' => 'Product 10', 'image' => 'https://static.preparaenem.com/conteudo_legenda/3b261ccd0452b89a863a35fe0a0355b6.jpg', 'description' => 'Description of product 10', 'unit_price' => 326.26, 'quantity' => 60],
        ]);
    }
}
