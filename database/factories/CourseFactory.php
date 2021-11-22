<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'category_id'   => random_int(1, 6),
            'author_id'     => random_int(1, 3),
            'title'         => 'لورم ایپسوم ' . $this->faker->title,
            'description'   => $this->faker->paragraph(10),
            'thumbnail'     => '/images/single' . random_int(1, 3) . '.jpeg',
            'rating'        => $this->faker->numberBetween(0, 5),
            'student_count' => $this->faker->numberBetween(0, 1000),
            'price'         => $this->faker->randomElement([0, 10000, 20000, 40000, 60000, 100000]),
            'status'        => $this->faker->randomElement([1, 2]),
        ];
    }
}
