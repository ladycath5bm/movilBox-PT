<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'department_name' => $this->faker->firstname(),
            'department_city' => $this->faker->city(),
        ];
    }
}
