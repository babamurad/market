<?php

namespace Database\Factories;

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
            'name' => $this->faker->words(3, true),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'slug' => $this->faker->slug,
            'content' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'price' => $this->faker->randomFloat(2),
            'quantity' => $this->faker->numberBetween(1, 100),
            'category_id' => $this->faker->numberBetween(1, 20),
            'brand_id' => $this->faker->randomDigit(1, 30),
            'manuf_id' => $this->faker->randomDigit(1, 30),
            'color_id' => $this->faker->randomDigit(1, 10),
            'created_at' => $this->faker->date($format = 'd-m-Y', $max = 'now'), // '1979-06-09'
            'updated_at' => $this->faker->date($format = 'd-m-Y', $max = 'now'), // '1979-06-09'
        ];
    }
}
