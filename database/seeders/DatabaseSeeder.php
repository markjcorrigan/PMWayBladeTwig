<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            PermissionSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            SiteSettingSeeder::class,
            BlogPostStarterSeeder::class,
        ]);

        $continents = [
            ['id' => 1, 'name' => 'Europe',],
            ['id' => 2, 'name' => 'Asia',],
            ['id' => 3, 'name' => 'Africa',],
            ['id' => 4, 'name' => 'South America',],
            ['id' => 5, 'name' => 'North America',],
        ];
        foreach ($continents as $continent) {
            \App\Models\Continent::factory()->create($continent)
                ->each(function ($c) {
                    $c->countries()->saveMany(Country::factory(10)->make());
                });
            ;
        }
    }
}
