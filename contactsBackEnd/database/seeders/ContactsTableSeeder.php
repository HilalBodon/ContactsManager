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
                'latitude' => 37.77494356,
                'longitude' => -122.41946443,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bilal',
                'phone' => '1234321',
                'latitude' => 37.77494356,
                'longitude' => -122.41946443,
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
                'latitude' => 37.7749456,
                'longitude' => -122.41456443,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ATATA construction',
                'phone' => '03/2342344',
                'latitude' => 37.7749456,
                'longitude' => -122.453455,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Geen Beans',
                'phone' => '03/23252',
                'latitude' => 37.4564564,
                'longitude' => -122.4564443,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'woolfi ',
                'phone' => '03/34534',
                'latitude' => 37.4564564,
                'longitude' => -122.4564443,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           [
                'name' => 'MBC FM',
                'phone' => '03/2345252',
                'latitude' => 37.4564564,
                'longitude' => -122.4564443,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wooden Bakery',
                'phone' => '03/234252',
                'latitude' => 37.4564564,
                'longitude' => -122.4564443,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
