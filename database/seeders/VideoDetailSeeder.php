<?php

namespace Database\Seeders;

use App\Models\VideoDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_details')->insert([
            [
                'video_id' => 2,
                'level' => 1,
                'category_id' => 2,
                'teacher_id' => 1,
                'title' => 'Doraemon',
                'description' => 'Quas ipsum perferendis fugiat nihil. Aperiam aspernatur necessitatibus cumque temporibus sit et. Vitae nam tempora laudantium tempore placeat magnam. Molestiae ex culpa culpa et doloribus voluptas.'
            ]
        ]);
        VideoDetail::factory()->count(20)->create();
    }
}
