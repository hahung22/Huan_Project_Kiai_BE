<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 20),
            'coupon_id' => $this->faker->numberBetween(1, 10),
            'name_receicer' => $this->faker->name(),
            'phone_receicer' => $this->faker->numerify('###-###-####'),
            'shipping_address' => $this->faker->address(),
            'vat' => 1000,
            'fee' => $this->faker->numberBetween(10000, 20000),
            'total_price' => $this->faker->numberBetween(20000, 100000),
        ];
    }
}
