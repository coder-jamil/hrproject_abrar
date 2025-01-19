<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Country;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users=User::all()->pluck('id')->toArray();
        $designations = Designation::all()->pluck('id')->toArray();
        $departments = Department::all()->pluck('id')->toArray();
        //$countries = Country::all()->pluck('id')->toArray();
        return [
            //
            'user_id' =>fake()->unique()->randomElement($users),
            'designation_id' => fake()->randomElement($designations),
            'department_id' => fake()->randomElement($departments),
            'country_id'=>fake()->numberBetween(),
            'language_id' =>fake()->numberBetween(1, 20),
            'mobile' =>fake()->phoneNumber(),
             'address'=>fake()->address(),
            'about'=>fake()->sentence(),
           
            
        ];
    }
}
