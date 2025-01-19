<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = ['Sales','Managment','Software Development','Products Manager','Staff'];
        return [
            //
            'department_name' => fake()->randomElement($departments),
           'parent_id'=>null,
        ];
    }
}
