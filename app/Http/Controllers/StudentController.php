<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class StudentController extends Controller
{
    public function listStudents(Request $request)
    {
        $courseId = $request->input('course_id');
        $students = [];

        if ($courseId === 'all') {
            $students = User::where('role', User::ROLE_STUDENT)->get();
        } elseif ($courseId) {
            $course = Course::findOrFail($courseId);
            $students = $course->users()->get();
        }

        // Fetch all courses
        $courses = Course::all();

        return view('students.page', compact('students', 'courses'));
    }

    public function showGrades($id)
    {
        $student = User::with('scores.subject')->findOrFail($id);
        $scores = $student->scores->groupBy('subject_id');

        return view('students.grades', compact('student', 'scores'));
    }
}
