<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '626919660',
            'address' => 'conakry',
            'usertype' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('s@t5f1dms4'),

        ]);
    }
}
