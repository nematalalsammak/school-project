<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

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
Route::namespace('Admin')
->prefix('admin')
->as('admin.')
->group(function(){
Route::resource('students', 'StudentsController');
Route::resource('teachers', 'TeachersController');
Route::get('/dashboard', [DashboardController::class,'studentCount'])->name('admin.dashboard');

});

/*Route::get('/dashboard', function () {
    return view('admin.dashboard');
});*/

