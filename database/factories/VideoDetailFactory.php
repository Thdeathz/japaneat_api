<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VideoDetail>
 */
class VideoDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'video_id' => $this->faker->numberBetween(1,4),
            'level' => $this->faker->numberBetween(1,5),
            'category_id' => $this->faker->numberBetween(1,8),
            'teacher_id' => $this->faker->numberBetween(11,15),
            'title' => $this->faker->randomElement(["自己紹介", "日常生活", "旅行", "料理", "映画", "音楽", "本", "ファッション", "スポーツ", "趣味", "環境問題", "アート", "文化", "恋愛", "友情", "人間関係", "仕事", "健康", "教育", "子育て", "ペット", "社会問題", "科学技術", "自然", "夢", "人生の節目", "贈り物", "食べ物", "コミュニケーション", "心の健康", "冒険", "ビジネス", "創造性", "感謝", "芸能", "自己啓発", "家族", "幸せ", "信念", "経済", "歴史", "宗教", "哲学", "国際問題", "愛", "幼児教育", "老人福祉", "障害者福祉"]),
            'description' => $this->faker->text($maxNbChars = 350)
        ];
    }
}
