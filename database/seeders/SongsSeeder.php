<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'title' => 'Ride',
            'singer' => 'Twenty One Pilots',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'Stressed Out',
            'singer' => 'Twenty One Pilots',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'Thunder',
            'singer' => 'Imagine Dragons',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'Believer',
            'singer' => 'Imagine Dragons',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'Heathens',
            'singer' => 'Twenty One Pilots',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

    }
}
