<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function authors(Request $request)
    {

        $authors = User::where('isAuthor', 1)->orderBy('name', 'desc')
                       ->paginate(15);

        return view('authors', compact('authors'));
    }

    public function show(Request $request, $slug)
    {
        $course = Course::firstWhere('slug', $slug);

        return view('course', compact('course'));
    }
}
