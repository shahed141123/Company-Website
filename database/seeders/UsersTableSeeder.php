<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Ngen It Super Admin',
                'email' => 'ngenit@gmail.com',
                'password' => Hash::make('ngenitadmin'),
                'role' => 'admin',
                'department' => 'admin',
                'status' => 'active',

            ],
            //Admin
            // [
            //     'name' => 'Ngen It Admin',
            //     'email' => 'jara.groups@gmail.com',
            //     'password' => Hash::make('ngenitadmin'),
            //     'role' => 'admin',
            //     'status' => 'active',

            // ],
              //Sales Admin
            [
                'name' => 'Sales Admin',
                'email' => 'sales@ngenitltd.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'department' => 'sales',
                'status' => 'active',

            ],
              //Sales
            [
                'name' => 'Sales Manager',
                'email' => 'bdm@ngenitltd.com',
                'password' => Hash::make('12345678'),
                'role' => 'manager',
                'department' => 'sales',
                'status' => 'active',

            ],
              //User OR Customer
            [
                'name' => 'Finance Admin',
                'email' => 'finance@ngenitltd.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'department' => 'accounts',
                'status' => 'active',

            ],
        ]);
    }
}
