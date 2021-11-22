<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Lesson;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('users.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'sometimes|required',
        ]);

        $user = auth()->user();
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        return back()->with('success', 'اطلاعات با موفقیت ویرایش شد.');
    }

    public function courses()
    {
        $enrolls = auth()->user()->enrolls;

        return view('users.courses', compact('enrolls'));
    }

    public function lesson(Course $course, $id)
    {
        if ( ! Enroll::whereUserId(auth()->user()->id)->whereCourseId($course->id)) {
            return abort(404, 'You have not purchased this course yet!');
        }
        $lesson = Lesson::find($id);
        $video  = '';
        for ($i = strpos($lesson->video, 'v=') + 2; $i < strlen($lesson->video); $i++) {
            $video .= $lesson->video[$i];
        }

        if ( ! $course->lessons()->find($id)) {
            return abort(404);
        }

        $lessons = $course->lessons;

        return view('users.lesson', compact(['course', 'lesson', 'lessons', 'video']));
    }

    public function user_credentials_update(Request $request)
    {
        if ( ! (Hash::check($request->get('current_password'), auth()->user()->password))) {
            // The passwords doesn't matches
            return redirect()->back()
                             ->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('new_password'), $request->get('confirm_new_password')) != 0) {
            //Current password and new password are same
            return redirect()->back()
                             ->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $this->validate(request(), [
            'current_password' => 'required',
            'new_password'     => 'required|string|min:6',
        ]);

        //Change Password
        $user           = auth()->user();
        $user->email    = $request->email;
        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        return redirect()->back()->with("success", "Password changed successfully");
    }
}
