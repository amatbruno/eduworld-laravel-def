<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    public function listStudents()
    {
        $students = User::where('role', User::ROLE_STUDENT)->get();

        return view('students.page', ['students' => $students]);
    }
}
