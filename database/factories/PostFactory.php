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
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'image_top' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug(3),
            'body' => $this->faker->paragraphs(3, true),
            'citation' => $this->faker->sentence,
            'autor' => $this->faker->name,
            'image_bottom' => $this->faker->imageUrl(),
            'featured' => $this->faker->boolean,
            'published_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
        ];
    }
}
