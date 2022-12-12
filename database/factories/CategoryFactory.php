<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = ucfirst($this->faker->words(2, true));
        return [
            'parent_id' => $this->faker->numberBetween(1, 10),
            'title' => $title,
            'content' => $this->faker->text($maxNbChars = 255),
            'slug' => Str::slug($title),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'desc' => $this->faker->text($maxNbChars = 200),
            'created_at' => $this->faker->date($format = 'd-m-Y', $max = 'now'), // '1979-06-09'
            'updated_at' => $this->faker->date($format = 'd-m-Y', $max = 'now'), // '1979-06-09'
        ];
    }


}
