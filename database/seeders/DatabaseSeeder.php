<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\EmployeeSeeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\DesignationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(DesignationSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(EmployeeSeeder::class);
        
    }
}
