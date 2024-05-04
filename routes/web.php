<?php

use App\Http\Controllers\AddAssignmentController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


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
