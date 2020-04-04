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

// contact
Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

//course 
Route::get('/study', 'CourseController@index');

Auth::routes();

Route::get('/mycourses', 'HomeController@index')->name('home');
