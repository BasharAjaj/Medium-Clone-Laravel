<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence,
            "slug" => \Illuminate\Support\Str::slug($this->faker->slug),
            "content" => implode("\n\n", $this->faker->paragraphs(5)),
            "image" => fake()->imageUrl(),
            "published_at" => fake()->optional()->dateTime(),
            "category_id" => Category::inRandomOrder()->first()->id,
            "user_id" => 1,


        ];
    }
}
