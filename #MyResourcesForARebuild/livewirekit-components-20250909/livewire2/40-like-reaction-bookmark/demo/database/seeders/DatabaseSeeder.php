<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Maize\Markable\Models\Like;
use Maize\Markable\Models\Bookmark;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\User::factory(3)->create();

        Post::factory(15)->create();

        for ($i = 2; $i < 5; $i++) {
            Like::create([
                'user_id'       => $i,
                'markable_type' => 'App\Models\Post',
                'markable_id'   => 1,
            ]);
        }

        for ($i = 2; $i < 5; $i++) {
            Bookmark::create([
                'user_id'       => 1,
                'markable_type' => 'App\Models\Post',
                'markable_id'   => $i,
            ]);
        }
    }
}
