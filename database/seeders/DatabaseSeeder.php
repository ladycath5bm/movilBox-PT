<?php

namespace Database\Seeders;

use App\Models\EducationLevel;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        EducationLevel::factory()->count(3)->create();
        $this->call(DepartmentSeeder::class);
        $this->call(EmployeeSeeder::class);
    }
}
