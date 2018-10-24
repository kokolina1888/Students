<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'HomeController@index')->name('home');
// Route::resource('courses', 'CoursesController');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/profile', 'ProfilesController@index')->name('profile');
	Route::get('/homeworks', 'HomeworksController@index')->name('homeworks');	
	Route::resource('lectures', 'LecturesController');
	Route::resource('courses', 'CoursesController')->except('courses.index');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
