<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create(['name' => 'Toys']);
        Category::create(['name' => 'Gadgets']);

        $p = Product::create(['name' => 'Lego']);
        $p->categories()->sync(1);

        $p = Product::create(['name' => 'Phone']);
        $p->categories()->sync([1, 2]);
    }
}
