<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\EducationLevel;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::factory(50)->create()
            ->each(function(Employee $employee) {
                $employee->department_id = Department::inRandomOrder()->first()->id;
                $employee->education_level_id = EducationLevel::inRandomOrder()->first()->id;
                $employee->save();
            });
    }
}
