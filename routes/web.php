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

Route::get('/', 'WelcomeController@index');

// contact
Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

//course 
Route::get('/study', 'CourseController@index');
Route::get('/study/{course}', 'CourseController@show');

Auth::routes();

Route::get('/mycourses', 'HomeController@index')->name('home');

// admin section
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');


Route::get('/admin', "AdminController@viewAdmin")->name('admin.dashboard');
Route::get('/admin/details', "AdminController@index")->name('admin.details');
Route::get('/admin/add', "AdminController@show")->name('admin.show');
Route::post('/admin/add', "AdminController@store")->name('admin.store');

//topics 
Route::get('/admin/topic', 'TopicController@topicForm')->name('topic.form');
Route::post('/admin/topic', 'TopicController@store')->name('topic.form.submit');

//courses for admin 
Route::get('/admin/courses', 'AdminController@viewCourses')->name('course.view');
Route::get('/admin/courses/{course}', 'AdminController@showCourse');
Route::get('/admin/courses/{course}/edit', 'AdminController@editCourse')->name('course.edit');
Route::patch('/admin/courses/{course}', 'AdminController@updateCourse');
Route::delete('/admin/courses/{course}', 'AdminController@destroyCourse');




//sections for the topics
Route::get('/admin/topics/section', 'SectionController@sectionForm')->name('section.form');
Route::post('/admin/topics/section', "SectionController@store")->name('section.form.submit');

