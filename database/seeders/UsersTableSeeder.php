<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 유저1
        DB::table('users')->insert([
            'email'=>'hong@gmail.com',
            'password'=>'1234',
            'name'=>'Hong',
            'address'=>'Daegu',
            'role'=>1,
        ]);

        // 유저2
        DB::table('users')->insert([
            'email'=>'lee@gmail.com',
            'password'=>'1234',
            'name'=>'Lee',
            'address'=>'NEWYORK',
            'role'=>1,
        ]);

        // 유저3
        DB::table('users')->insert([
            'email'=>'kim@gmail.com',
            'password'=>'1234',
            'name'=>'Kim',
            'address'=>'TOKYO',
            'role'=>1,
        ]);

        // 유저4
        DB::table('users')->insert([
            'email'=>'park@gmail.com',
            'password'=>'1234',
            'name'=>'Park',
            'address'=>'FUKUOKA',
            'role'=>1,
        ]);
    }
}
