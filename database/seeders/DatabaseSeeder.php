<?php

namespace Database\Seeders;

use App\Models\IncentivesAndBonuses;
use App\Models\RollCall;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        // Employee Types
        $this->call(DepartmentSeeder::class);
        $this->call(EmployeeTypeSeeder::class);
        $this->call(PermissonTypeSeeder::class);
        $this->call(TasksSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(TypesOfEducationSeeder::class);
        $this->call(EmployeeTrainingSeeder::class);
        $this->call(RollCallSeeder::class);
        $this->call(PerformanceEvaluationSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(IncentivesAndBonusesSeeder::class);
        $this->call(SalariesSeeder::class);




    }
}
