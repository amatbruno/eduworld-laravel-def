<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function show()
    {
        $user = auth()->user();

        if ($user->courses->isEmpty()) {
            return view('students.tasks', ['assignments' => collect()]);
        }

        $courses = $user->courses;

        $assignments = Assignment::whereHas('courses', function ($query) use ($courses) {
            $query->whereIn('courses.id', $courses->pluck('id')->toArray());
        })->get();

        // Pasar las tareas a la vista
        return view('students.tasks', compact('assignments'));
    }

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

    public function showTaskDetails($id)
    {
        $assignment = Assignment::findOrFail($id);
        return view('students.task-details', compact('assignment'));
    }
}
