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
                'phone' => '11223334455',
                'latitude' => 37.7749,
                'longitude' => -122.4194,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
