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

Route::get('/mycourses', function(){
    return view('mycourses');
})->middleware('auth');

Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

Route::get('/study', function(){
    return view('study');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
