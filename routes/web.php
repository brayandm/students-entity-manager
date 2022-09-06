<?php

use App\Http\Controllers\StudentsController;
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

Route::get('/', [StudentsController::class, 'index'])->name('index');

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/addstudent', function(){
    return view('addstudent');
})->name('addstudent');


Route::get('/listofstudents', function(){
    return view('listofstudents');
})->name('listofstudents');


Route::post('/addstudent', [StudentsController::class, 'add'])->name('addstudent');
