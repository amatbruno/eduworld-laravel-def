<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function listAssignments(Request $request)
    {
        $courseId = $request->input('course_id');
        $assignments = [];

        if ($courseId === 'all') {
            $assignments = Assignment::all();
        } elseif ($courseId) {
            $course = Course::findOrFail($courseId);
            $assignments = $course->assignments()->get();
        }

        $courses = Course::all();

        return view('tasks.page', compact('courses', 'assignments'));
    }
}
