<?php

use App\Http\Controllers\AddAssignmentController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('/enroll', [EnrollmentController::class, 'show'])->name('enroll.show');
Route::get('/add', [AddAssignmentController::class, 'show'])->name('add.show');


Route::post('/enroll', [EnrollmentController::class, 'enroll'])->name('enroll');
Route::post('/add', [AddAssignmentController::class, 'add'])->name('add');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
