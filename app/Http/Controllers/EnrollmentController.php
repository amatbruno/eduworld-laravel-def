<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class EnrollmentController extends Controller
{
    public function show()
    {
        return view('students.enroll');
    }

    public function enroll(Request $request)
    {
        $course = Course::findOrFail($request->course_id);
        $user = User::findOrFail($request->user_id);

        //Duplicate Validation
        if ($user->courses()->where('course_id', $request->course_id)->exists()) {
            return back()->with('error', 'User is already enrolled in this course!');
        }

        $user->courses()->attach($course);

        return back()->with('success', 'User enrolled in course successfully!');
    }
}
