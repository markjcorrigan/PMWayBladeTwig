<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        $user = collect(User::all()->modelKeys());

        return [
            'title' => $this->faker->words(3, true),
            'user_id' => $user->random(),
        ];
    }
}
