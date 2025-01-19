<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = file_get_contents(public_path(). '/countries/countries.json');
       $countries_array = json_decode($countries,true);
        $country_names = array_column([$countries_array],'name');
        $country_codes = array_column([$countries_array],'code');
        
        //
        Country::factory(count($country_names) )->create();
        //foreach($countries_array as $singel_country){

            //$country = new Country;
            //$country->country_name = $singel_country ['name'];
            //$country->country_code=$singel_country ['code'];
            //$country->flag_image =$singel_country ['code'].'.png';

            //$country->save();
        //}

        
    }
}
