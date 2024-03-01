<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VideoPost>
 */
class VideoPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'video_url' => $this->faker->url,
            'duration' => $this->faker->randomDigitNotNull . ' minutes',
            'video_format' => $this->faker->randomElement(['mp4', 'mov', 'avi']),
        ];
    }
}
