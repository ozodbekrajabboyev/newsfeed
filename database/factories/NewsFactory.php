<?php

namespace Database\Factories;

use App\Models\author;
use App\Models\category;
use App\Models\news;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<news>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => Author::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'photo_url' => $this->faker->imageUrl(),
        ];
    }
}
