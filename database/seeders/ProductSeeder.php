<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Smartphone',
            'description' => 'Android, 128GB storage',
            'price' => 699.99,
            'stock' => 25,
        ]);

        Product::create([
            'name' => 'Wireless Headphones',
            'description' => 'Noise cancelling',
            'price' => 149.99,
            'stock' => 50,
        ]);
    }
}
