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
        // $users = User::factory(2)->create();
        return [
            'title' => $this->faker->sentence(rand(2, 3)),
            'body' => $this->faker->sentence(1000),
            'likes' => random_int(1, 10),
            'dislikes' => random_int(1, 10),
            'user_id' => rand(1,2),
            'active' => rand(1,0)
        ];
    }
}
