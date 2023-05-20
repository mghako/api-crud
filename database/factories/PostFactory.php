<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->unique()->sentence();
        return [
            'post_key' => fake()->uuid(),
            'title' => fake()->unique()->sentence(),
            'slug' => Str::of($title)->slug(),
            'content' => fake()->unique()->sentence(),
            'author_id' => 1
        ];
    }
}
