<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([

            // Admin
            [
                'name'      =>  "Ngen It",
                'short_name'=>  "Software, License, Solutions, Services &amp; More",
                'favicon'   =>  "https://www.ngenitltd.com/assets/ngenitfront1/images/favicon.ico",
                'logo'      =>  'https://www.ngenitltd.com/assets/ngenitfront1/images/logo.png',
                'address'   =>  "Haque Chamber(11 floor - C&D)
                 89/2, Panthapath, Dhaka-1215",
                'email1'     =>  "support@ngenitltd.com",
                'email2'     =>  "sales@ngenitltd.com",
                'mobile'     =>  "+88 01714243446",
                'phone'     =>  "(+88) 0258155838",
                'hour'      =>  "Saturday - Thursday : 09 AM - 06 PM",
                'facebook'  =>  "https://www.facebook.com/ngenitltd",
                'twitter'   =>  "www.twitter.com",
                'linked_in' =>  "www.linked-in.com",


            ],


        ]);
    }
}
