<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achievements')->insert([
            [
                'name' => 'Lofi music 1',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/images%2Ft%E1%BA%A3i%20xu%E1%BB%91ng.png?alt=media&token=7a499c59-e821-45ab-93da-909c7b126b68',
                'url' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/audio%2FChill%20Work%20Music%20%E2%80%94%20Calm%20Focus%20Mix.mp3?alt=media&token=b6951ff2-1685-4420-8474-bfb05a6b6165',
                'require_point' => 100,
                'type' => 0
            ],
            [
                'name' => 'Lofi music 2',
                'url' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/audio%2FNh%E1%BB%AFng%20B%C3%A0i%20H%C3%A1t%20Lofi%20Acoustic%20Ti%E1%BA%BFng%20Anh%20C%E1%BB%B1c%20Chill%20Hay%20Nh%E1%BA%A5t%20-%20Nh%E1%BA%A1c%20Lofi%20Chill%20Tik%20Tok%20Nh%E1%BA%B9%20Nh%C3%A0ng.mp3?alt=media&token=92bc2078-e0bc-4583-8f05-0822c6ce4977',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/images%2Ft%E1%BA%A3i%20xu%E1%BB%91ng.png?alt=media&token=7a499c59-e821-45ab-93da-909c7b126b68',
                'require_point' => 100,
                'type' => 0
            ],
            [
                'name' => 'Theme 1',
                'url' => null,
                'image' => null,
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'Theme 2',
                'url' => null,
                'image' => null,
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'Theme 3',
                'url' => null,
                'image' => null,
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'Float button',
                'url'   => null,
                'image' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/images%2Ft%E1%BA%A3i%20xu%E1%BB%91ng.png?alt=media&token=7a499c59-e821-45ab-93da-909c7b126b68',
                'require_point' => 100,
                'type' => 2
            ]
        ]);
    }
}
