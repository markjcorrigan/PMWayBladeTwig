<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    public function definition(): array
    {
        $project = collect(Project::all()->modelKeys());

        return [
            'title' => $this->faker->words(rand(4, 6), true),
            'project_id' => $project->random(),
        ];
    }
}
