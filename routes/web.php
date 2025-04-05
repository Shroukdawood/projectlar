<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController; 
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\InstructorsController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('courses',CoursesController::class);
Route::get('/courses', [CoursesController::class, 'index']);
route::post('/courses/store', [CoursesController::class, 'store']);


// route::group(['perfix'=>'admin'],function(){
//     Route::resource('courses',CoursesController::class);
//     route::resource('students',StudentsController::class);
//     route::resource('instructors',InstructorsController::class);
// });
route::group(['prefix'=>'admin'],function(){
    Route::resource('students',StudentsController::class);
    Route::resource('instructors',InstructorsController::class);
});


