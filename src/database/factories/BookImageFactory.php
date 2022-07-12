<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

class BookImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $filePath = storage_path('images');
        if (!File::exists($filePath)) {
            File::makeDirectory($filePath);
        }
        return [
            'book_id' => $this->faker->numberBetween(1, 30),
            'image_path' => $this->faker->image($filePath, 400, 300, null, false)
        ];
    }
}
