<?php

namespace Database\Factories;

use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->slug(2),
            'description' => $this->faker->sentence(5),
            'image' => 'https://loremflickr.com/320/240',
            'price' => $this->faker->numberBetween(10000, 20000),
            'amount' => $this->faker->numberBetween(50, 100),
        ];
    }
}
