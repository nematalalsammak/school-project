<?php

use App\Http\Controllers\Admin\AttendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentParentController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\TeacherController;
use App\Models\StudentParent;

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
Route::get('/home', [HomeController::class, 'index'])->name('front.home');
Route::namespace('Front')
    ->prefix('front')
    ->as('front.')
    ->group(function () {
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        Route::get('/aboutUs', [AboutController::class, 'index'])->name('aboutUs');
        Route::get('/blog', [BlogController::class, 'index'])->name('blog');
        Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
    });

    

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__ . '/auth.php';

Route::namespace('Admin')
    ->prefix('admin')
    ->as('admin.')
    ->middleware(['auth'])
    ->group(function () {
        Route::resource('students', 'StudentsController');
        Route::resource('teachers', 'TeachersController');
        Route::resource('schoolClasses', 'StudentClassController');
        Route::resource('studentParent', 'StudentParentController');
        Route::resource('subjects', 'SubjectsController');
        Route::resource('grades', 'GradeController');
        Route::resource('roles', 'RolesController');

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/attendance', [AttendanceController::class, 'index'])
            ->name('attendance');

        /*Route::get('/create', [AttendanceController::class, 'create'])
            ->name('attendance.create');*/

        Route::get('/attendanceList', [AttendanceController::class, 'viewList'])
            ->name('attendance.viewList');

        Route::post('/attendance', [AttendanceController::class, 'store'])
            ->name('attendance.store');


        /*Route::get('/studentParent', [StudentParentController::class, 'index'])
        ->name('studentParent');*/
    });
