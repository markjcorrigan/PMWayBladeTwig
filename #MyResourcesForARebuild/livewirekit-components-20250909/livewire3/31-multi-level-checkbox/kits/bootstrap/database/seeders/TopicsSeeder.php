<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicsSeeder extends Seeder
{
    public function run(): void
    {
        Topic::create(['name' => 'Back-end']);
        Topic::create(['name' => 'Laravel', 'topic_id' => 1]);
        Topic::create(['name' => 'Symfony', 'topic_id' => 1]);
        Topic::create(['name' => 'CodeIgniter', 'topic_id' => 1]);

        Topic::create(['name' => 'Front-end']);
        Topic::create(['name' => 'React', 'topic_id' => 5]);
        Topic::create(['name' => 'Vue.js', 'topic_id' => 5]);
        Topic::create(['name' => 'Angular', 'topic_id' => 5]);
    }
}
