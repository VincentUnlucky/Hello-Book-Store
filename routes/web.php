<?php

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

Route::get('/template',function(){
    return view('template');
});

Route::get('/contact',[App\Http\Controllers\HomeController::class,'Contact'])->name('contact');
Route::get('/home',[App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('/science',[App\Http\Controllers\BooksController::class,'Science'])->name('science');
Route::get('/fiction',[App\Http\Controllers\BooksController::class,'Fiction'])->name('fiction');
Route::get('/computer',[App\Http\Controllers\BooksController::class,'Computer'])->name('computer');
Route::get('/home/{id}',[App\Http\Controllers\DetailsController::class,'details1'])->name('details');
