<?php

namespace Database\Factories;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(6);
        $price = $this->faker->randomFloat(0, 5000, 50000);

        $filePath = storage_path('avatars');
        if (!File::exists($filePath)) {
            File::makeDirectory($filePath);
        }

        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'author_id' => $this->faker->numberBetween(1, 10),
            'name' => $name,
            'slug' => Str::slug($name),
            'short_description' => $this->faker->text(150),
            'description' => $this->faker->text(200),
            'quantity' => $this->faker->numberBetween(1, 20),
            'price' => $price,
            'discount_price' => $this->faker->randomFloat(0, 0, $price),
            'publish_date' => $this->faker->date(),
            'publishing_house' => $this->faker->company(),
            'avatar' => $this->faker->image($filePath, 400, 300, null, false)
        ];
    }
}
