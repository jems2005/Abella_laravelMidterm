<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ClassroomController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::resource('teachers', TeacherController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('classrooms', ClassroomController::class);
