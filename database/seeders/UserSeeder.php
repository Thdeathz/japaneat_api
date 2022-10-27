<?php

namespace Database\Seeders;

use App\Models\User;
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
        DB::table('users')->insert([
            [
                'name' => 'Bui Dung',
                'email' => 'user1@gmail.com',
                'role' => 1,
                'total_point' => 1000,
                'used_point' => 300,
                'achievement' => '1,5,8',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Nguyen An',
                'email' => 'user2@gmail.com',
                'role' => 1,
                'total_point' => 1000,
                'used_point' => 200,
                'achievement' => '6,9',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Teacher1',
                'email' => 'teacher1@gmail.com',
                'role' => 0,
                'total_point' => 0,
                'used_point' => 0,
                'achievement' => null,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Teacher2',
                'email' => 'teacher2@gmail.com',
                'role' => 0,
                'total_point' => 0,
                'used_point' => 0,
                'achievement' => null,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Teacher3',
                'email' => 'teacher3@gmail.com',
                'role' => 0,
                'total_point' => 0,
                'used_point' => 0,
                'achievement' => null,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Teacher4',
                'email' => 'teacher4@gmail.com',
                'role' => 0,
                'total_point' => 0,
                'used_point' => 0,
                'achievement' => null,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Teacher5',
                'email' => 'teacher5@gmail.com',
                'role' => 0,
                'total_point' => 0,
                'used_point' => 0,
                'achievement' => null,
                'password' => Hash::make('123456'),
            ]
        ]);
    }
}
