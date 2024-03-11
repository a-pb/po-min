<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'project_name' => fake()->word(),
            'remember_token' => Str::random(10),
        ];
    }
}
