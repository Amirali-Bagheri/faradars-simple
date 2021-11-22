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
        $persianFaker = \Faker\Factory::create('fa_IR');

        return [
            'title'=> $this->faker->realText(50),
            'slug' => Str::slug($this->faker->realText(50),'-','fa'),
        ];
    }
}
