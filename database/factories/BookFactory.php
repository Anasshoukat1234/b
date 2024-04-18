<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => 200,
            'image' => 'book.jpg',
            'category_id' => fake()->numberBetween(1, 10),
            'author_id' => fake()->numberBetween(1, 10),
            'user_id' => fake()->numberBetween(1, 10),
            'content' => 'peragraph',
            'rating' =>  fake()->numberBetween(1, 5),
        ];
    }
}
