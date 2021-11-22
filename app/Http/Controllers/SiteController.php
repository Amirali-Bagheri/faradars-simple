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

}
