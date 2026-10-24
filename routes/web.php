<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', [CourseController::class, 'index'])->name('course.index');

Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');

Route::post('/courses/store', [CourseController::class, 'store'])->name('course.store');
