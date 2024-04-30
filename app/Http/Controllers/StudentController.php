<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    public function showStudentsPage(string $role)
    {
        $studentRole = 'STUDENT';

        $studentUsers = User::whereHas('role', function ($query) use ($studentRole) {
            $query->where('name', $studentRole);
        })->get();

        return view('students.page', compact('studentUsers'));
    }
}
