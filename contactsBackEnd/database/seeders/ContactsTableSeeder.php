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
        ]);
    }
}
