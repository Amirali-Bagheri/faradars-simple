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
                'avatar'          => '/images/team'.random_int(1,4).'.jpeg',
                'password'       => bcrypt('1234567890')
            ]
        );

        // User Seed
        $users = User::factory()->times(10)->create();
        $users->push($defaultUser);

        // Author Users
        User::query()->whereIn('id',[1,5,7])->update([
            'isAuthor'=>1
        ]);

        // Categories
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
        $categories[] = Category::create([
            'title'=>'دسته چهارم',
            'slug'=>'دسته-چهارم',
        ]);
       $categories[] = Category::create([
            'title'=>'دسته پنجم',
            'slug'=>'دسته-پنجم',
        ]);
       $categories[] = Category::create([
            'title'=>'دسته ششم',
            'slug'=>'دسته-ششم',
        ]);

        $categories = collect($categories);

        $courses = [];

        //assign courses to user
        foreach (User::where('isAuthor',1)->get() as $user) {

            $userCourses = Course::factory()
                ->times(20)
                ->make();

            foreach($userCourses as $course) {
                $course->author()->associate($user);
                $course->category()->associate($categories->random()->getKey());
                $course->save();
            }

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
    }
}
