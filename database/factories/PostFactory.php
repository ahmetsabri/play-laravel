<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,2),
            'title' => $this->faker->sentence(2),
            'body' => $this->faker->sentence(3),
            'likes' => random_int(1, 10),
            'dislikes' => random_int(1, 10),
            'tags' => json_encode(['post','sport','php'])
        ];
    }
}
