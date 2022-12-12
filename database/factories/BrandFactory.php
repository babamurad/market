<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = ucfirst( $this->faker->words(1, true));
        return [
            'name' =>$name,
            'content' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'slug' => Str::slug($name),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'created_at' => $this->faker->date($format = 'd-m-Y', $max = 'now'), // '1979-06-09'
            'updated_at' => $this->faker->date($format = 'd-m-Y', $max = 'now'), // '1979-06-09'
        ];
    }
}
