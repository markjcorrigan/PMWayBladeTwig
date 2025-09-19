<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([
            'name'     => 'Barbie',
            'price'    => 19.99,
            'position' => 1,
        ]);
        Product::create([
            'name'     => 'Lego',
            'price'    => 49.99,
            'position' => 2,
        ]);
        Product::create([
            'name'     => 'iPhone',
            'price'    => 1099.99,
            'position' => 3,
        ]);
        Product::create([
            'name'     => 'Samsung Galaxy Buds',
            'price'    => 199.99,
            'position' => 4,
        ]);
    }
}
