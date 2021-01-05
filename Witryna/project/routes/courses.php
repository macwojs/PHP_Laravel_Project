<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::get('/courses/mine', [CourseController::class, 'mine'])
    ->name('courses.mine');

Route::get('/courses/{course}/generateMark', [CourseController::class, 'generateMark'])
    ->name('courses.generateMark');

Route::get('/courses/{id}/listparticipants', [CourseController::class, 'listparticipants'])
    ->name('courses.listparticipants');

Route::get('/courses/{courseid}/confirm/{id}', [CourseController::class, 'confirm'])
    ->name('courses.confirm');

Route::get('/courses/{id}/join', [CourseController::class, 'join'])
    ->name('courses.join');

Route::resource('courses', CourseController::class);

Route::resource('courses.lessons', LessonController::class);