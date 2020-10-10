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
Route::post('/study/{course}', 'CourseController@addCourse')->name('course.get');
// Route::get('/study/lesson/{course}', 'CourseController@showIndividualCourse');
Route::get('/study/lesson/{course}', 'CourseController@Topics')->name('course.content');
// Route::delete('/study/lesson/{course}', 'CourseController@destroy');
Route::patch('/study/lesson/{course}', 'CourseController@destroy')->name('update');
Route::get('/study/lesson/content/{course}/{topic}', 'CourseController@LessonContent')->name('lesson.content');


Auth::routes();

Route::get('/mycourses', 'HomeController@index')->name('home');
Route::get('/mycourses/{user}/editProfile', 'HomeController@edit')->name('profile.edit');
Route::patch('/mycourses/{user}', 'HomeController@updateCourse')->name('profile.submit');
Route::delete('/mycourses/{user}', 'HomeController@deleteUser')->name('user.course');
Route::get('/mycourses/{course}/quiz', 'HomeController@QuizSection')->name('course.quiz');

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

Route::get('/admin/{course}/topic', 'TopicController@playground')->name('Course.topic');
Route::post('/admin/{course}/topic', 'TopicController@playgroundStore')->name('Course.topic.submit');
Route::get('/admin/{course}/topic/{topic}/edit', 'TopicController@editTopicPlayground')->name('Course.topic.edit');
Route::patch('/admin/{course}/topic/{topic}', 'TopicController@editTopicPlaygroundUpdate')->name('Course.topic.edit.submit');
Route::delete('/admin/topic/{topic}', 'TopicController@destroyPlaygroundTopic')->name('Course.topic.delete');

//courses for admin 
Route::get('/admin/courses', 'AdminController@viewCourses')->name('course.view');
Route::get('/admin/courses/{course}', 'AdminController@showCourse');
Route::get('/admin/courses/{course}/edit', 'AdminController@editCourse')->name('course.edit');
Route::patch('/admin/courses/{course}', 'AdminController@updateCourse')->name('course.edit.submit');
Route::delete('/admin/courses/{course}', 'AdminController@destroyCourse');
Route::patch('/admin/c/{course}', 'AdminController@changeStatus')->name('course.status');
Route::patch('/admin/notification/{notification}', 'AdminController@changeNotification')->name('notification');

Route::get('/admin/course/{course}/topic/{topic}/section', 'SectionController@GetLesson')->name('Topic.section');
Route::post('/admin/course/{course}/topic/{topic}/section', 'SectionController@PostLesson')->name('Topic.section.submit');
Route::get('/admin/topic/{topic}/section/{section}/edit', 'SectionController@EditLessonForm')->name('Topic.section.edit');
Route::patch('/admin/topic/{topic}/section/{section}', 'SectionController@EditLesson')->name('Topic.section.edit.submit');
Route::delete('/admin/topics/section/{section}', "SectionController@DeleteLesson");

// payment 
Route::get('/payment/{course}', 'PaymentController@index')->name('payment.index');
Route::post('/pay/{course}', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback/{course}', 'PaymentController@handleGatewayCallback');

// questions
Route::post('/admin/{course}/question', 'QuestionController@create')->name('question.create');
Route::post('/admin/{course}/question/submit', 'QuestionController@submit')->name('solutions');

//answers
Route::get('/admin/{course}/question/{question}/answer', 'AnswerController@show')->name('answer.show');
Route::post('/admin/{course}/question/{question}/answer', 'AnswerController@create')->name('answer.create');
