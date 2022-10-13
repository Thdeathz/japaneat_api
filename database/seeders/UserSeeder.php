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
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Nguyen An',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('123456'),
            ]
        ]);
    }
}
