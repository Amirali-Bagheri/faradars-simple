<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'     => $this->faker->words(3, true),
            'course_id' => null,
            'sort'     => $this->faker->numberBetween(1, 10),
            'path'      => '',
        ];
    }
}
