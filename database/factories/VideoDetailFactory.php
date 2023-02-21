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
            'category_id' => $this->faker->numberBetween(1,4),
            'teacher_id' => $this->faker->numberBetween(11,15),
            'title' => $this->faker->randomElement([
                'N5 kaiwa',
                'N4 kaiwa',
                'N3 kaiwa',
                'N2 kaiwa',
                'N1 kaiwa',
            ]),
            'description' => $this->faker->text($maxNbChars = 350)
        ];
    }
}
