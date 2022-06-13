<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstname(),
            'lastname' => $this->faker->lastName(),
            'salary' => random_int(10000, 99990),
            'department_id' => 1,
            'education_level_id' => 1,
        ];
    }
}
