<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $countries = file_get_contents(public_path(). 'countries/countries.json');
        $countries_array = json_decode($countries,true);
        $country_names = array_column([$countries_array],'name');
        $country_codes = array_column([$countries_array],'code');
        //$countries = ['a','b','c'];
       
        return [
            //
            'country_name' => fake()->unique()->randomElement($country_names),
            'flag_image'=>null,
        ];
    }
}
