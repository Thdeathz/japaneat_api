<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'url' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/records%2F310494156_5414734775248345_2126202774798386280_n.mp4636e3bbd-bf34-4d4b-b149-115b468e2e41?alt=media&token=a4778ab3-7765-4017-a35d-48601bc5eeec',
                'thumbnail' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2Ft%E1%BA%A3i%20xu%E1%BB%91ng.png?alt=media&token=da488a92-34be-47d8-86be-3d14479ed8c0',
            ],
            [
                'url' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2Fdoraemon_raw.mp4?alt=media&token=4f60f543-ad8a-4525-a5c2-2649db8001e5',
                'thumbnail' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/images%2Fdoraemon_thumbnail.png?alt=media&token=afea5569-8717-46cf-a14b-7374ea8784de',
            ],
            [
                'url' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/records%2FrecordCourse.mp4e7a0860e-d968-4ec7-b925-67ba04cafda6?alt=media&token=55f137c9-66f6-4d50-b197-a6fb0fb87fe9',
                'thumbnail' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/records%2Fdownload.jfifae251ff5-9507-42f6-8199-95d3c67c55c4?alt=media&token=ea6abde6-ef05-4348-b2b4-b14c3e69ff24',
            ],
            [
                'url' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/records%2FrecordCourse.mp4eadf7d31-78d2-46d1-a917-21439bf0d727?alt=media&token=bca0ff63-b2bd-4889-bee8-8e684fad1ece',
                'thumbnail' => 'https://firebasestorage.googleapis.com/v0/b/kaiwa-app-133b5.appspot.com/o/records%2Fmaxresdefault%20(1).jpgd7b15d89-4b4a-4827-a2a3-ef36322e2cb3?alt=media&token=504b0cff-b45f-4b66-b19c-151a7d31a69a',
            ],
        ]);
    }
}
