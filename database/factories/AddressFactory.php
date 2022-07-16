<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'country' => $this->faker->country(),
            'region' => $this->faker->word(),
            'city' => $this->faker->city(),
            'code' => $this->faker->postcode(),
            'address' => $this->faker->sentence(),
            'phone' => $this->faker->e164PhoneNumber()
        ];
    }
}
