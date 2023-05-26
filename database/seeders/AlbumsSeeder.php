<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'name' => 'Blurryface',
            'year' => 2015,
            'times_sold' => 90000000,
            'band_id' => 1,
        ]);

        DB::table('albums')->insert([
            'name' => 'Blurryface',
            'year' => 2015,
            'times_sold' => 90000000,
            'band_id' => 2,
        ]);

        DB::table('albums')->insert([
            'name' => 'Evolve',
            'year' => 2017,
            'times_sold' => 90000000,
            'band_id' => 3,
        ]);

        DB::table('albums')->insert([
            'name' => 'Evolve',
            'year' => 2017,
            'times_sold' => 10000000,
            'band_id' => 4,
        ]);

        DB::table('albums')->insert([
            'name' => 'Heathens',
            'year' => 2016,
            'times_sold' => 10000000,
            'band_id' => 5,
        ]);
    }
}
