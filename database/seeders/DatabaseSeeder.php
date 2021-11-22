<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // sample user
        $defaultUser = User::factory()->create(
            [
                'name'           => 'امیرعلی باقری',
                'email'          => 'bagheriamirali2000@gmail.com',
                'password'       => bcrypt('1234567890')
            ]
        );


        // User registrasi
        $users = User::factory()->times(10)->create();
        $users->push($defaultUser);

        // Admin membuat master kategori
        $categories = [];
        $categories[] = Category::create([
            'title'=>'دسته اول',
            'slug'=>'دسته-اول',
        ]);
        $categories[] = Category::create([
            'title'=>'دسته دوم',
            'slug'=>'دسته-دوم',
        ]);
        $categories[] = Category::create([
            'title'=>'دسته سوم',
            'slug'=>'دسته-سوم',
        ]);

        $categories = collect($categories);

        $courses = [];

        // Untuk setiap user, punya 0 - 3 course
        foreach ($users as $user) {

            $userCourses = Course::factory()
                ->times(rand(1, 3))
                ->make();

            // asosiasikan course dengan category dan author
            // setiap course punya beberapa video
            foreach($userCourses as $course) {
                $course->author()->associate($user);
                $course->category()->associate($categories->random()->getKey());
                $course->save();
            }

            // setiap course punya beberapa video
            foreach($userCourses as $course) {
                foreach (range(1, 5) as $index) {
                    $video = Video::factory()->make(['sort' => $index]);
                    $course->videos()->save($video);
                }
                $courses[] = $course;
            }
        }

        // Wishlist
        $courses = collect($courses);
        foreach($users as $user)
        {
            $user->wishlists()->sync([$courses->random()->getKey(), $courses->random()->getKey()]);
        }

        // Enrolled Course

        // Models\User::factory(10)->create();
    }
}
