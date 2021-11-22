<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $cat_query = $request->query('cat');
        $category  = Category::firstWhere('slug', $cat_query);

        if ( ! empty($category)) {
            $courses = $category->courses()->paginate(15);
        } else {
            $courses = Course::latest()->paginate(15);
        }

        $categories = Category::where('status', 1)->whereHas('courses')->paginate(15);

        return view('index', compact('courses', 'categories'));
    }

    public function search(Request $request)
    {
        $query = $request->query('q');

        $courses = Course::query()
                         ->where('title', 'LIKE', '%' . $query . '%')
                         ->orWhere('description', 'LIKE', '%' . $query . '%')
                         ->paginate(15);

        return view('index', compact('courses'));
    }

    // courses by category
    public function courses_by_category(Category $category)
    {
        return view('courses_by_category')
            ->with('category', $category)
            ->with('courses', $category->courses()->paginate(6));
    }

    // course details
    public function course_detail(Course $course)
    {
        return view('course_details', compact('course'));
    }

    public function checkAuth()
    {
        $isLoggedIn = auth()->check() ? true : false;
        return response()->json(['success' => $isLoggedIn]);
    }
}
