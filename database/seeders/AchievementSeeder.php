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
                'image' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2F83446803_p0_master1200.png?alt=media&token=a7d7936f-50fb-4ec1-867e-90d41f4e548d',
                'url' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2FNh%E1%BB%AFng%20B%C3%A0i%20H%C3%A1t%20Lofi%20Acoustic%20Ti%E1%BA%BFng%20Anh%20C%E1%BB%B1c%20Chill%20Hay%20Nh%E1%BA%A5t%20-%20Nh%E1%BA%A1c%20Lofi%20Chill%20Tik%20Tok%20Nh%E1%BA%B9%20Nh%C3%A0ng.mp3?alt=media&token=83addea3-3a68-4aac-aadd-5ae53c5a8487',
                'require_point' => 100,
                'type' => 0
            ],
            [
                'name' => 'Lofi music 2',
                'url' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2FChill%20Work%20Music%20%E2%80%94%20Calm%20Focus%20Mix.mp3?alt=media&token=4ea0ad24-dd73-44e5-b5fd-f83bc0d09297',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2F83446803_p0_master1200.png?alt=media&token=a7d7936f-50fb-4ec1-867e-90d41f4e548d',
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
                'url' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2Fcute-dog-husky-cursor.png?alt=media&token=067d1426-b608-4c68-97f8-10be95d504d2',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2Fcute-dog-husky-pointer.png?alt=media&token=c74ca00d-5692-4055-9375-0cb2fd6bf871',
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'Cursor2',
                'url' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2Fmeme-pop-cat-cursor.png?alt=media&token=94fc4077-057e-496c-8e47-7c9ba78247b2',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2Fmeme-pop-cat-pointer.png?alt=media&token=dab08041-0bb0-49c3-ac13-070dd6519b81',
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'Cursor3',
                'url' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2Fmochi-mochi-peach-cat-and-bubble-tea-cursor.png?alt=media&token=66f1fdca-d0ed-4836-948f-4020246bc2ad',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2Fmochi-mochi-peach-cat-and-bubble-tea-pointer.png?alt=media&token=712c444f-fe92-4717-944d-a0d433f3e9b9',
                'require_point' => 100,
                'type' => 1
            ],
            [
                'name' => 'unicorn',
                'url'   => null,
                'image' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2F2-removebg-preview%20(1).png?alt=media&token=72401948-7b4d-4c0d-8e5f-cd4ee4c9460d',
                'require_point' => 100,
                'type' => 2
            ],
            [
            'name' => 'chat meme',
            'url'   => null,
            'image' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2Ftext-bubble-phase-flat-pixelated-260nw-488743813-removebg-preview.png?alt=media&token=20bfbb60-f292-4caa-9321-0a291dd53cf9',
            'require_point' => 100,
            'type' => 2
            ]
        ]);
    }
}
