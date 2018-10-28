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
	// Route::resource('courses', 'CoursesController', 'only'=> 'index');

Route::group(['middleware' => 'auth'], function(){
	
	Route::get('/homeworks', 'HomeworksController@index')->name('homeworks');	
	Route::resource('lectures', 'LecturesController');
	Route::resource('courses', 'CoursesController', ['except'=> 'index']);
	Route::resource('users', 'UsersController', ['only' => ['show', 'index']]);
	Route::resource('users', 'UsersController', ['only' => ['store', 'create', 'edit', 'update', 'destroy']])->middleware('isAdmin');
	Route::resource('profiles', 'ProfilesController', ['only' => ['edit', 'update', 'show']]);
});

	// Route::resource('courses', 'CoursesController', ['only'=> 'index']);
	Route::get('/', 'CoursesController@index');


Auth::routes();

Route::get('/home', 'CoursesController@index')->name('home');
