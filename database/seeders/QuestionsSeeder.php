<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 40; $i++) {
            DB::table('questions')->insert([
                'name' => Str::random(rand(4,15)),
                'email' => Str::random(rand(4,10)) . '_' . $i+1 . '@gmail.com',
                'phone_number' => '+' . rand(0,9) . rand(0,9) . rand(0,9) . ' ' . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . ' ' . rand(0,9) . rand(0,9) . rand(0,9),
                'question' => Str::random(rand(25,400)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
