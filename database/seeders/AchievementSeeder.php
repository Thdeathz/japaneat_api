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
                'name' => 'Theme1',
                'url' => null,
                'image' => null,
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'Theme2',
                'url' => null,
                'image' => null,
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'Cursor1',
                'url' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/cursor%2Fcute-dog-husky-cursor.png?alt=media&token=83a8ffb3-1be3-41ad-8cb7-f1094182b035',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/cursor%2Fcute-dog-husky-pointer.png?alt=media&token=b22e1564-2ca5-4c34-a96d-4645d8e274cf',
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'Cursor2',
                'url' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/cursor%2Fmeme-pop-cat-cursor.png?alt=media&token=e303b4cf-3660-4cf7-b5a0-8d263993b7ea',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/cursor%2Fmeme-pop-cat-pointer.png?alt=media&token=890c66d4-8a47-477f-9ed4-de7cf918c4ce',
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'Cursor3',
                'url' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/cursor%2Fmochi-mochi-peach-cat-and-bubble-tea-cursor.png?alt=media&token=14df55f3-e549-46b9-a405-56359aec194f',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/cursor%2Fmochi-mochi-peach-cat-and-bubble-tea-pointer.png?alt=media&token=bad7b3b4-9458-4899-bd86-207e4b06f716',
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'unicorn',
                'url'   => null,
                'image' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/floatButton%2F2-removebg-preview.png?alt=media&token=343d63d8-6c72-4c7e-a607-fd6dc952b8da',
                'require_point' => 100,
                'type' => 2
            ],
            [
            'name' => 'chat meme',
            'url'   => null,
            'image' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/floatButton%2Ftext-bubble-phase-flat-pixelated-260nw-488743813-removebg-preview.png?alt=media&token=27e42b3c-3933-4042-903d-4711b35b6cb9',
            'require_point' => 100,
            'type' => 2
            ]
        ]);
    }
}
