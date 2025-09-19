<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(rand(3, 4), true),
            'body'  => $this->faker->paragraph(rand(10, 15)),
        ];
    }
}
