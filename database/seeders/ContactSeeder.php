<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'method' => 'Our phone number: +(453)-432 134 42',
        ]);

        DB::table('contacts')->insert([
            'method' => 'Our address: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod possimus consequuntur ratione fugiat recusandae! Non?',
        ]);
    }
}
