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
                'url' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/videos%2F310494156_5414734775248345_2126202774798386280_n.mp4?alt=media&token=135a9013-fd92-463d-90ca-5b80bb6ff559',
                'thumbnail' => 'https://firebasestorage.googleapis.com/v0/b/japaneat-525ab.appspot.com/o/images%2Ft%E1%BA%A3i%20xu%E1%BB%91ng.png?alt=media&token=7a499c59-e821-45ab-93da-909c7b126b68',
            ],
        ]);
    }
}
