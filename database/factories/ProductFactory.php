<?php

namespace Database\Factories;

use \App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'img' => $this->faker->randomElement(array('product1.jpg', 'product2.jpg', 'product3.jpg')),
            'price' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->paragraph(1)
        ];
    }
}
