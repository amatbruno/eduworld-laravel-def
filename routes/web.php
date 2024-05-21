<?php

use App\Http\Controllers\ManageAssignmentController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\EnrollmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;

//Default routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/games', function () {
    return view('students.games-menu');
});
Route::get('/geography', function () {
    return view('students.geography');
});


//Routes for components
Route::view('/games', 'students.games-menu');
Route::view('/geography', 'students.geography');


Route::get('/students', [StudentController::class, 'listStudents']);
Route::get('/tasks', [AssignmentController::class, 'listAssignments']);
Route::get('/grades/{id}', [StudentController::class, 'showGrades'])->name('grades');


Route::get('/enroll', [EnrollmentController::class, 'show'])->name('enroll.show');
Route::get('/add', [ManageAssignmentController::class, 'show'])->name('add.show');


Route::post('/enroll', [EnrollmentController::class, 'enroll'])->name('enroll');
Route::post('/add', [ManageAssignmentController::class, 'add'])->name('add');
Route::delete('/delete/{id}', [ManageAssignmentController::class, 'delete'])->name('delete');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
