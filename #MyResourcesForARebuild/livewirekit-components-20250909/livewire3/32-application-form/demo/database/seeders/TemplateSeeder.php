<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    public function run(): void
    {
        Template::create(['name' => 'Your name?', 'text' => 'What is your name?']);
        Template::create(['name' => 'Favorite color?', 'text' => 'What is your favorite color?']);
        Template::create(['name' => 'Birth date?', 'text' => 'What is your date of birth?']);
        Template::create(['name' => 'Comments?', 'text' => 'Any additional comments?']);
    }
}
