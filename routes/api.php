<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/courses', [CourseController::class, 'store']);

Route::post('/teacher', [TeacherController::class, 'store']);

Route::post('/student', [StudentController::class, 'store']);

Route::get('/courses', [CourseController::class, 'getCourses']);

Route::get('/teacher', [TeacherController::class, 'getTeachers']);







