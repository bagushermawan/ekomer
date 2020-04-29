<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //KETIGA DATA INI AKAN DIJADIKAN DUMMY USER DENGAN MASING-MASING ROLE YANG DIMILIKINYA
        User::create([
            'name' => 'baher',
            'email' => 'baher@a.com',
            'password' => bcrypt('secret'),
            'role' => 'admin'
        ]);


        User::create([
            'name' => 'user',
            'email' => 'user@a.com',
            'password' => bcrypt('secret'),
            'role' => 'user'
        ]);
    }
}