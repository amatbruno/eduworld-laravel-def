<?php

use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/students', [StudentController::class, 'listStudents']);

Route::get('/enroll', [EnrollmentController::class, 'show'])->name('enroll.show');

Route::post('/enroll', [EnrollmentController::class, 'enroll'])->name('enroll');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
