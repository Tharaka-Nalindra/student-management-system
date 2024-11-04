<?php

use App\Http\Controllers\studentController;
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
    return view('pages.home.index');
});

Route::get('/student', function () {
    return view('pages.student.index');
});

Route::post('/save', [studentController::class, 'save'])->name('sudent.save');

Route::get('/student',[studentController::class,'showdata'])->name('student');

Route::get('/{stu_id}/edit',[studentController::class,'edit'])->name('student.edit');

Route::post('/{stu_id}/update',[studentController::class,'update'])->name('student.update');

Route::get('/{stu_id}/delete',[studentController::class,'delete'])->name('student.delete');

