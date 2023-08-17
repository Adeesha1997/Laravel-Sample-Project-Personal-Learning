<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin

            [
                'name' => 'Admin',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role'  => 'Admin',
                'status' => 'active',
            ],

              //Agent

              [
                'name' => 'Agent',
                'username' => 'Agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('111'),
                'role'  => 'Agent',
                'status' => 'active',
            ],

              //User

              [
                'name' => 'User',
                'username' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role'  => 'User',
                'status' => 'active',
            ],

        ]);
    }
}
