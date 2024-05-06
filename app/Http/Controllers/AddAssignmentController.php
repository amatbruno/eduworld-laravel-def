<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Http\Request;

class AddAssignmentController extends Controller
{
    public function show()
    {
        return view('tasks.add');
    }

    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'course_id' => 'required|exists:courses,id',
            'thumbnail' => 'max:200',
        ]);

        // Create a new assignment
        $assignment = Assignment::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'thumbnail' => $request->thumbnail,
        ]);

        // Attach the assignment to the selected course
        $course = Course::findOrFail($request->course_id);
        $course->assignments()->attach($assignment);

        return back()->with('success', 'Task added to the course successfully!');
    }
}
