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
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Nguyen An',
                'email' => 'user2@gmail.com',
                'role' => 1,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Teacher1',
                'email' => 'teacher1@gmail.com',
                'role' => 0,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Teacher2',
                'email' => 'teacher2@gmail.com',
                'role' => 0,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Teacher3',
                'email' => 'teacher3@gmail.com',
                'role' => 0,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Teacher4',
                'email' => 'teacher4@gmail.com',
                'role' => 0,
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Teacher5',
                'email' => 'teacher5@gmail.com',
                'role' => 0,
                'password' => Hash::make('123456'),
            ]
        ]);
    }
}
