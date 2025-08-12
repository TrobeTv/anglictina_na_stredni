<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    public function run(): void
    {
        $regions = [
            'Hlavní město Praha',
            'Středočeský',
            'Jihočeský',
            'Plzeňský',
            'Karlovarský',
            'Ústecký',
            'Liberecký',
            'Královéhradecký',
            'Pardubický',
            'Vysočina',
            'Jihomoravský',
            'Olomoucký',
            'Zlínský',
            'Moravskoslezský',
        ];

        foreach ($regions as $region) {
            Region::firstOrCreate(['name' => $region]);
        }
    }
}
