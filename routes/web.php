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
Route::resource('aboutus', AboutController::class);
Route::resource('services', ServiceController::class);
Route::resource('solutions', SolutionController::class);
Route::resource('projects', ProjectController::class);
Route::resource('news', NewsController::class);
Route::resource('contactus', ContactUsController::class);
Route::resource('products' , 'ProductController');
Route::get('/', 'HomeController@index')->name('home.index');
