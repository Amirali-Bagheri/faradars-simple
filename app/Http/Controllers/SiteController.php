<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
	public function index()
	{

        $courses = Course::latest()->paginate(15);


		return view('index',compact('courses'));
	}
}
