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
                'achievement' => '2,6,8',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Nguyen An',
                'email' => 'user2@gmail.com',
                'role' => 1,
                'total_point' => 800,
                'used_point' => 200,
                'achievement' => '2,6,8',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'user3@gmail.com',
                'role' => 1,
                'total_point' => rand(1, 1000),
                'used_point' => 0,
                'achievement' => '',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Trần Thị B',
                'email' => 'user4@gmail.com',
                'role' => 1,
                'total_point' => rand(1, 1000),
                'used_point' => 0,
                'achievement' => '',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Lê C',
                'email' => 'user5@gmail.com',
                'role' => 1,
                'total_point' => rand(1, 1000),
                'used_point' => 0,
                'achievement' => '',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Phạm D',
                'email' => 'user6@gmail.com',
                'role' => 1,
                'total_point' => rand(1, 1000),
                'used_point' => 0,
                'achievement' => '',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Hoàng E',
                'email' => 'user7@gmail.com',
                'role' => 1,
                'total_point' => rand(1, 1000),
                'used_point' => 0,
                'achievement' => '',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Ngô F',
                'email' => 'user8@gmail.com',
                'role' => 1,
                'total_point' => rand(1, 1000),
                'used_point' => 0,
                'achievement' => '',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Đặng G',
                'email' => 'user9@gmail.com',
                'role' => 1,
                'total_point' => rand(1, 1000),
                'used_point' => 0,
                'achievement' => '',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Bùi H',
                'email' => 'user10@gmail.com',
                'role' => 1,
                'total_point' => rand(1, 1000),
                'used_point' => 0,
                'achievement' => '',
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
