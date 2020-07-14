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

Route::get('/choose', 'ChooseRoleController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => ['auth','admin', 'verified'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@home')->name('admin');
	Route::get('/accounts', 'AdminPageController@accounts')->name('admin.accounts');
	Route::get('/resources', 'AdminPageController@resources')->name('admin.resources');
	Route::get('/notifications', 'AdminPageController@notifications')->name('admin.notifications');
	Route::get('/wallet', 'AdminPageController@wallet')->name('admin.wallet');
});

Route::group(['middleware' => ['auth','tutor', 'verified'], 'prefix' => 'tutor'], function(){

    Route::get('/', 'TutorPageController@home')->name('tutor');
	Route::get('/profile', 'TutorPageController@profile')->name('tutor.profile');
	Route::get('/resources', 'TutorPageController@resources')->name('tutor.resources');
	Route::get('/notifications', 'TutorPageController@notifications')->name('tutor.notifications');
	Route::get('/wallet', 'TutorPageController@wallet')->name('tutor.wallet');
});

Route::group(['middleware' => ['auth','student', 'verified'], 'prefix' => 'student'], function(){

    Route::get('/', 'StudentPageController@home')->name('student');
	Route::get('/profile', 'StudentPageController@profile')->name('student.profile');
	Route::get('/resources', 'StudentPageController@resources')->name('student.resources');
	Route::get('/notifications', 'StudentPageController@notifications')->name('student.notifications');
	Route::get('/wallet', 'StudentPageController@wallet')->name('student.wallet');
});


