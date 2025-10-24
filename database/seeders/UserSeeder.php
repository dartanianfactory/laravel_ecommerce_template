<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            ['id' => 1, 'name' => 'test', 'email' => 'customer@gmail.com', 'password' => Hash::make('123123'), 'type' => 'customer'],
            ['id' => 2, 'name' => 'test', 'email' => 'hot_customer@gmail.com', 'password' => Hash::make('123123'), 'type' => 'hot_customer'],
            ['id' => 3, 'name' => 'test', 'email' => 'manager@gmail.com', 'password' => Hash::make('123123'), 'type' => 'manager'],
            ['id' => 4, 'name' => 'test', 'email' => 'admin@gmail.com', 'password' => Hash::make('123123'), 'type' => 'admin'],
            ['id' => 5, 'name' => 'test', 'email' => 'banned@gmail.com', 'password' => Hash::make('123123'), 'type' => 'banned'],
        ]);
    }
}
