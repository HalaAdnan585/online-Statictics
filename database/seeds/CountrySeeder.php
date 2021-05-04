<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->insert([
            [
                'country_name' => 'Palestine, State of',
                'country_shortcode' => 'ps',
                'is_active' => 1,
            ],
            [
                'country_name' => 'Saudi Arabia',
                'country_shortcode' => 'sa',
                'is_active' => 1,
            ],
            [
                'country_name' => 'India',
                'country_shortcode' => 'in',
                'is_active' => 1,
            ],
            [
                'country_name' => 'United States',
                'country_shortcode' => 'us',
                'is_active' => 1,
            ],
            [
                'country_name' => 'United Kingdom',
                'country_shortcode' => 'uk',
                'is_active' => 1,
            ],
        ]);
    }
}
