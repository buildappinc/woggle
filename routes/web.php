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

//study 
Route::get('/study', 'StudyController@index');
Route::get('/study/{course}', 'StudyController@show');

// course
Route::post('/study/{course}', 'CourseController@addCourse');
Route::get('/study/lesson/{course}', 'CourseController@showIndividualCourse');
Route::get('/study/lesson/content/{course}/{topic}', 'CourseController@lessonContent')->name('course.content');


Auth::routes();

Route::get('/mycourses', 'HomeController@index')->name('home');
Route::get('/mycourses/{user}/editProfile', 'HomeController@edit')->name('profile.edit');
Route::patch('/mycourses/{user}', 'HomeController@updateCourse')->name('profile.submit');

// admin section
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
Route::post('/admin/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');


Route::get('/admin', "AdminController@viewAdmin")->name('admin.dashboard');
Route::get('/admin/details', "AdminController@index")->name('admin.details');
Route::get('/admin/add', "AdminController@show")->name('admin.show');
Route::post('/admin/save', "AdminController@save")->name('admin.save');
Route::post('/admin/add', "AdminController@store")->name('admin.store');

//topics 
Route::get('/admin/topic', 'TopicController@topicForm')->name('topic.form');
Route::post('/admin/topic', 'TopicController@store')->name('topic.form.submit');
Route::get('/admin/topic/{topic}/edit', 'TopicController@editTopic');
Route::patch('/admin/topic/{topic}', 'TopicController@updateTopic');
Route::delete('/admin/topic/{topic}', 'TopicController@destroyTopic');

//courses for admin 
Route::get('/admin/courses', 'AdminController@viewCourses')->name('course.view');
Route::get('/admin/courses/{course}', 'AdminController@showCourse');
Route::get('/admin/courses/{course}/edit', 'AdminController@editCourse')->name('course.edit');
Route::patch('/admin/courses/{course}', 'AdminController@updateCourse');
Route::delete('/admin/courses/{course}', 'AdminController@destroyCourse');

//sections for the topics
Route::get('/admin/topics/section', 'SectionController@sectionForm')->name('section.form');
Route::post('/admin/topics/section', "SectionController@store")->name('section.form.submit');
Route::get('/admin/topics/section/{section}/edit', "SectionController@editSection");
Route::patch('/admin/topics/section/{section}', "SectionController@updateSection");
Route::delete('/admin/topics/section/{section}', "SectionController@destroySection");

// payment 
Route::get('/payment', 'PaymentController@index')->name('payment.index');


