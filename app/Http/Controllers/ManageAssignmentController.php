<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageAssignmentController extends Controller
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
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnailPath = $file->store('thumbnail', 'public');
        }

        // Create a new assignment
        $assignment = Assignment::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'thumbnail' => $thumbnailPath
        ]);

        // Attach the assignment to the selected course
        $course = Course::findOrFail($request->course_id);
        $course->assignments()->attach($assignment);

        return back()->with('success', 'Task added to the course successfully!');
    }

    public function delete($id)
    {
        $assignment = Assignment::find($id);
        $assignment->delete();

        DB::table('assignment_course')->where('assignment_id', $id)->delete();

        return back()->with('success', 'Task deleted successfully!');
    }
}
