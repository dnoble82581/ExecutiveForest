<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'slug' => fake()->slug,
            'long_description' => fake()->paragraph,
            'short_description' => fake()->paragraph,
            'material_finish' => fake()->paragraph,
            'price' => fake()->randomFloat(2, 1, 200),
            'sale_price' => fake()->randomFloat(2, 1, 200),
            'quantity' => fake()->randomFloat(0, 1, 10),
            'status' => fake()->randomFloat(0, 1, 2),
            'on_sale' => fake()->randomFloat(0, 1, 2),
            'meta_title' => fake()->sentence,
            'meta_keyword' => fake()->sentence,
            'meta_description' => fake()->paragraph,
        ];
    }
}
