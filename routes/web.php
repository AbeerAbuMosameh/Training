<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
    Route::resource('students', \App\Http\Controllers\StudentController::class);
    Route::resource('courses', \App\Http\Controllers\CourseController::class);
    Route::resource('register_course', \App\Http\Controllers\RegisteredCourseController::class);
    Route::get('/student_Courses', '\App\Http\Controllers\RegisteredCourseController@select')->name('student_course');

