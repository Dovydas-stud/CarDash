<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 45; $i++) {
            DB::table('ads')->insert([
                'title' => Str::random(rand(4,15)),
                'description' => Str::random(rand(25,255)),
                'users_id' => rand(1,10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
