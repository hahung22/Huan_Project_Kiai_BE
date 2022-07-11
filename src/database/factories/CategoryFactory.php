<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5'];
        return [
            'parent_id' => $this->faker->numberBetween(1, 5),
            'category_name' => $categories[rand(0, count($categories) - 1)],
            'description' => $this->faker->sentence(6)
        ];
    }
}
