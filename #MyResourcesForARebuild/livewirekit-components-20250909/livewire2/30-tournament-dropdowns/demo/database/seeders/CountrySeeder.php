<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // All participants of Eurovision 2021
        $countries = [
            'Lithuania',
            'Slovenia',
            'Russia',
            'Sweden',
            'Australia',
            'North Macedonia',
            'Ireland',
            'Cyprus',
            'Norway',
            'Croatia',
            'Belgium',
            'Israel',
            'Romania',
            'Azerbaijan',
            'Ukraine',
            'Malta',
            'San Marino',
            'Estonia',
            'Czech Republic',
            'Greece',
            'Austria',
            'Poland',
            'Moldova',
            'Iceland',
            'Serbia',
            'Georgia',
            'Albania',
            'Portugal',
            'Bulgaria',
            'Finland',
            'Latvia',
            'Switzerland',
            'Denmark',
            'France',
            'Germany',
            'Italy',
            'Spain',
            'United Kingdom',
            'Netherlands',
        ];

        foreach ($countries as $country) {
            Country::create(['name' => $country]);
        }
    }
}
