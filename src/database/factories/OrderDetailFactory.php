<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->numberBetween(1, 15),
            'book_id' => $this->faker->numberBetween(1, 30),
            'price' => $this->faker->numberBetween(20000, 50000),
            'quantity' => $this->faker->numberBetween(1, 5),
        ];
    }
}
