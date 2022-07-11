<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(50),
            'discount' => $this->faker->numberBetween(10, 99),
            'limit' => $this->faker->numberBetween(10, 100),
            'code' => strtoupper($this->faker->word()),
            'description' => $this->faker->text(),
        ];
    }
}
