<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            'name' => 'Twenty One Pilots',
            'genre' => 'hip hop',
            'founded' => 2003,
            'active_till' => 'heden',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('bands')->insert([
            'name' => 'Twenty One Pilots',
            'genre' => 'hip hop',
            'founded' => 1264,
            'active_till' => 'heden',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('bands')->insert([
            'name' => 'Imagine Dragons',
            'genre' => 'hip hop',
            'founded' => 1264,
            'active_till' => 'heden',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('bands')->insert([
            'name' => 'Imagine Dragons',
            'genre' => 'hip hop',
            'founded' => 1264,
            'active_till' => 'heden',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('bands')->insert([
            'name' => 'Twenty One Pilots',
            'genre' => 'hip hop',
            'founded' => 1264,
            'active_till' => 'heden',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
