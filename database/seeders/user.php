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
        DB::table('Users')->insert(['name'=>'Savleen', 'email'=>Str::random(10) .'@gmail.com', 'password'=>Str::random(10)]);
        DB::table('Users')->insert(['name'=>'Shraddha', 'email'=>Str::random(10) .'@gmail.com', 'password'=>Str::random(10)]);
        DB::table('Users')->insert(['name'=>'Anchal', 'email'=>Str::random(10) .'@gmail.com', 'password'=>Str::random(10)]);
        DB::table('Users')->insert(['name'=>'Shubhangi', 'email'=>Str::random(10) .'@gmail.com', 'password'=>Str::random(10)]);
        DB::table('Users')->insert(['name'=>'Muzaffar', 'email'=>Str::random(10) .'@gmail.com', 'password'=>Str::random(10)]);
        DB::table('Users')->insert(['name'=>'Pratik', 'email'=>Str::random(10) .'@gmail.com', 'password'=>Str::random(10)]);
        DB::table('Users')->insert(['name'=>'Sakshi', 'email'=>Str::random(10) .'@gmail.com', 'password'=>Str::random(10)]);
        DB::table('Users')->insert(['name'=>'Rishika', 'email'=>Str::random(10) .'@gmail.com', 'password'=>Str::random(10)]);
        DB::table('Users')->insert(['name'=>'Siddharth', 'email'=>Str::random(10) .'@gmail.com', 'password'=>Str::random(10)]);
        DB::table('Users')->insert(['name'=>'Tanya', 'email'=>Str::random(10) .'@gmail.com', 'password'=>Str::random(10)]);
    }
}
