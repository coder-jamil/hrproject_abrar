<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Designation>
 */
class DesignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $designations = ['CEO','Manager','Software Development','Project Manager','abme'];
        return [
            //
            'designation_name'=> fake()->randomElement($designations),
            'parent_id'=>null,
        ];
    }
}
