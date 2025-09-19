<?php

namespace Database\Seeders;

use App\Models\Rating;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i=1; $i <= rand(10,20); $i++) {
            Rating::create([
                'post_id' => 1,
                'rating' => rand(1,5)
            ]);
        }
    }
}
