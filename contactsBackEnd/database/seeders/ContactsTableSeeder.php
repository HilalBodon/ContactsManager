<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'name' => 'hilal',
                'phone' => '33445566',
                'latitude' => 33.89332,
                'longitude' => 35.50157,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bilal',
                'phone' => '1234321',
                'latitude' => 33.9,
                'longitude' =>  35.48333,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Faysal',
                'phone' => '03/456345',
                'latitude' => 37.7749456,
                'longitude' => -122.41456443,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Smith',
                'phone' => '03/344366',
                'latitude' => 34.43352,
                'longitude' => 35.84415,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ATATA construction',
                'phone' => '03/2342344',
                'latitude' => 33.27333, 
                'longitude' => 35.19389,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
