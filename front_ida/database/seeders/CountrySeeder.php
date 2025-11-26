<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $json = File::get(database_path('data/countries.json'));
        $countries = json_decode($json, true);

        foreach ($countries as $country) {
            Country::create([
                'name' => $country['name'],
                'code' => $country['code'],
            ]);
        }
    }
}
