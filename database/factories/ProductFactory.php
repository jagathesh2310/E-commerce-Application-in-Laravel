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
            'name'=>fake()->colorName,
            'description'=>fake()->paragraph,
            'price'=>random_int(100, 2000),
            'quantity'=>random_int(10, 100),
            'image'=>'storage/products/default.jpg',
        ];
    }
}
