<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/logout',[ProfileController::class,'destroy'])->name('logout');
Route::controller(App\Http\Controllers\StudentController::class)->group(function(){
    Route::get('/create/student','create')->name('create.student');
    Route::post('/create/student','store')->name('students.add');
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
    Route::get('course/view','show')->name('course.view');


});

 Route::get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');

//  Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
//                 ->name('logout');
// });

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


require __DIR__.'/auth.php';
