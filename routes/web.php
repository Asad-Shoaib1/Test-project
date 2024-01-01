<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::controller(App\Http\Controllers\StudentController::class)->group(function(){
    Route::get('/create/student','create')->name('create.student');
    Route::post('/create/student','store')->name('students.add');
    Route::get('/profile','profile')->name('profile');
    Route::get('/profile/edit/{id}','profileedit');
    Route::post('/profile/edit/{id}','profileupdate');
    Route::get('/students','index')->name('student.show');
    Route::get('/student/edit/{id}','edit')->name('student/edit');
    Route::post('/student/edit/{id}','update')->name('students.store');
    Route::get('/delete/{id}',  'delete')->name('delete');
    Route::get('logout','destroy')->name('logout');
    

});

Route::controller(App\Http\Controllers\CourseController::class)->group(function(){
    Route::get('course','create')->name('create.course');
    Route::Post('course','store')->name('course.store');
    Route::get('course/edit/{id}','edit');
    Route::post('course/edit/{id}','update');
    Route::get('course/view/{id}','show');
    Route::get('allcourses','allcourses')->name('allcourses');
    Route::get('/course/add/{id}','addcourse');
    


});

 Route::get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');

require __DIR__.'/auth.php';
