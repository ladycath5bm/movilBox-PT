<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EducationLevelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstname(),
            'description' => $this->faker->sentence(),
        ];
    }
}
