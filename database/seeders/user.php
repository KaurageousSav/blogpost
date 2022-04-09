<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert(['name'=>'Savleen', 'email'=>'Savleen@gmail.com', 'password'=>"Savleen@123"]);
        DB::table('Users')->insert(['name'=>'Shraddha', 'email'=>'Shraddha@gmail.com', 'password'=>'Shraddha@123']);
        DB::table('Users')->insert(['name'=>'Anchal', 'email'=>'Anchal@gmail.com', 'password'=>"Anchal@123"]);
        DB::table('Users')->insert(['name'=>'Shubhangi', 'email'=>'Shubhangi@gmail.com', 'password'=>"Shubhangi@123"]);
        DB::table('Users')->insert(['name'=>'Muzaffar', 'email'=>'Muzaffar@gmail.com', 'password'=>"Muzaffar@123"]);
        DB::table('Users')->insert(['name'=>'Pratik', 'email'=>'Pratik@gmail.com', 'password'=>"Pratik@123"]);
        DB::table('Users')->insert(['name'=>'Sakshi', 'email'=>'Sakshi@gmail.com', 'password'=>"Sakshi@123"]);
        DB::table('Users')->insert(['name'=>'Rishika', 'email'=>'Rishika@gmail.com', 'password'=>"Rishika@123"]);
        DB::table('Users')->insert(['name'=>'Siddharth', 'email'=>'Siddharth@gmail.com', 'password'=>"Siddharth@123"]);
        DB::table('Users')->insert(['name'=>'Tanya', 'email'=>'Tanya@gmail.com', 'password'=>"Tanya@1234"]);
    }
}
