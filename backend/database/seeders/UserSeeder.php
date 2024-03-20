<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mediaId = 1; // Replace with the actual media_id you want to associate with the user

        DB::table('users')->insert([
            'username' => 'Dariya',
            'email' => 'dariyaadmin@gmail.com',
            'password' => Hash::make('dariya24admin'), // Hash the password
        ]);

    }
}
