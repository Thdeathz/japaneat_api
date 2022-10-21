<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'animal',
            ],
            [
                'category_name' => 'sport',
            ],
            [
                'category_name' => 'anime',
            ],
            [
                'category_name' => 'greeting',
            ]
        ]);
    }
}
