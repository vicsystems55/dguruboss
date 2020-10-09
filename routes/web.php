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

Route::get('/old', function () {
    return view('welcome');
});

Route::get('/regInstructor', function () {
    return view('auth.register3');
});

Route::view('/vue', 'student.sample');

Route::get('/getusers', 'StudentPageController@users');

Route::get('/oneuser/{id}', 'StudentPageController@oneuser');

Route::get('/loadcourses', 'TutorPageController@loadcourses');

Route::get('/sample', function () {
    return view('admin.home');
});

Route::get('/choose', 'ChooseRoleController@index');

Route::get('/home', 'ChooseRoleController@index')->name('home');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/justpaid', 'PaymentController@handleGatewayCallback')->name('justpaid')->middleware('auth');

Auth::routes();

Route::resource('video', 'VideoController');


// Route::group(['middleware' => 'auth'], function () {
// 	Route::get('table-list', function () {
// 		return view('pages.table_list');
// 	})->name('table');

// 	Route::get('typography', function () {
// 		return view('pages.typography');
// 	})->name('typography');

// 	Route::get('icons', function () {
// 		return view('pages.icons');
// 	})->name('icons');

// 	Route::get('map', function () {
// 		return view('pages.map');
// 	})->name('map');

// 	Route::get('notifications', function () {
// 		return view('pages.notifications');
// 	})->name('notifications');

// 	Route::get('rtl-support', function () {
// 		return view('pages.language');
// 	})->name('language');

// 	Route::get('upgrade', function () {
// 		return view('pages.upgrade');
// 	})->name('upgrade');
// });

Route::group( [], function () {
	Route::get('/', 'FrontPageController@index')->name('frontpage');  
	Route::get('/blog', 'FrontPageController@blog')->name('blog');
	Route::get('/events', 'FrontPageController@events')->name('events');
	Route::get('/event_single/{id}', 'FrontPageController@event_single')->name('event_single');
	Route::get('/teachers', 'FrontPageController@teachers')->name('teachers');
	Route::get('/teacher_single/{id}', 'FrontPageController@teacher_single')->name('teacher_single');
	Route::get('/blog', 'FrontPageController@blog')->name('blog');
	Route::get('/blog_single/{id}', 'FrontPageController@blog_single')->name('blog_single');
	Route::get('/contact', 'FrontPageController@contact')->name('contact');
	Route::get('/course_session/{id}', 'FrontPageController@course_session')->name('course_session')->middleware('auth');
	Route::get('/course_details/{id}', 'FrontPageController@course_details')->name('course_details');
	Route::get('/courses', 'FrontPageController@courses')->name('courses');
	Route::get('/course_single/{id}', 'FrontPageController@course_single')->name('course_single');
	Route::get('/blog_details', 'FrontPageController@blog_details')->name('blog_details');
	Route::get('/about', 'FrontPageController@about')->name('about');
	Route::get('/tournament', 'FrontPageController@tour')->name('tournament');
	Route::post('/upload_tour', 'TournamentController@create_tournament')->name('upload_tour');
	
	
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
	Route::get('/tournament', 'AdminPageController@tournament')->name('admin.tournament');
	Route::get('/notifications', 'AdminPageController@notifications')->name('admin.notifications');
	Route::get('/wallet', 'AdminPageController@wallet')->name('admin.wallet');
	Route::get('/accounts_details/{id}', 'AdminPageController@account_details')->name('admin.accounts_details');
	
	
});

Route::get('/unpaidmember', function () {
    return view('tutor.unpaid');
})->middleware('auth');

Route::post('/add_course', 'AddCourseController@store')->name('add_course');



Route::group(['middleware' => ['auth','tutor', 'unpaidmember', 'verified'], 'prefix' => 'tutor'], function(){

	Route::get('/', 'TutorPageController@home')->name('tutor');
	
	Route::get('/allclasses', 'TutorPageController@allclasses')->name('tutor.allclasses');

	Route::get('/addclasses', 'TutorPageController@addclasses')->name('tutor.addclasses');

	Route::get('/course_details/{id}', 'TutorPageController@course_details')->name('tutor.course_details');

	Route::get('/my_topics', 'TutorPageController@my_topics')->name('tutor.my_topics');

	Route::post('/addclass', 'TutorPageController@addclass')->name('tutor.addclass');

	Route::get('/profile', 'TutorPageController@profile')->name('tutor.profile');

	Route::post('/regprofile', 'TutorPageController@regprofile')->name('tutor.regprofile');

	Route::get('/resources', 'TutorPageController@gurulibrary')->name('tutor.resources');
	
	Route::get('/loadcourses', 'TutorPageController@loadcourses');

	Route::get('/reports', 'TutorPageController@reports')->name('tutor.reports');

	Route::get('/notifications', 'TutorPageController@notifications')->name('tutor.notifications');

	Route::get('/wallet', 'TutorPageController@wallet')->name('tutor.wallet');

	Route::get('/one_class/{id}', 'TutorPageController@one_class')->name('tutor.one_class');

	Route::get('/one_class_edit/{id}', 'TutorPageController@one_class_edit')->name('tutor.one_class_edit');

	Route::post('/create-class', 'CreateClassController@store')->name('tutor.create-class');

	Route::post('/create_topic', 'CreateTopicController@create')->name('tutor.create_topic');

	Route::post('/create_topic', 'CreateTopicController@create')->name('tutor.create_topic');

	Route::post('/publish_course', 'CreateTopicController@publish_course')->name('tutor.publish_course');

	Route::post('/draft_course', 'CreateTopicController@draft_course')->name('tutor.draft_course');

	Route::get('/edit_topic/{id},{course}', 'CreateTopicController@edit_topic')->name('tutor.edit_topic');

	Route::get('/class-enrich/{id}', 'TutorPageController@class_enrich')->name('tutor.class-enrich');
	
});

Route::group(['middleware' => ['auth','student', 'verified'], 'prefix' => 'student'], function(){

    Route::get('/', 'StudentPageController@home')->name('student');
	Route::get('/profile', 'StudentPageController@profile')->name('student.profile');
	Route::get('/myclasses', 'StudentPageController@myclasses')->name('student.myclasses');
	Route::get('/profile', 'StudentPageController@profile')->name('student.profile');
	Route::get('/projects', 'StudentPageController@projects')->name('student.projects');
	Route::get('/reports', 'StudentPageController@reports')->name('student.reports');
	Route::get('/singleclass', 'StudentPageController@singleclass')->name('student.singleclass');
	Route::get('/resources', 'StudentPageController@resources')->name('student.resources');
	Route::get('/notifications', 'StudentPageController@notifications')->name('student.notifications');
	Route::get('/wallet', 'StudentPageController@wallet')->name('student.wallet');  

	Route::get('/onecourse', 'StudentPageController@onecourse')->name('student.onecourse');
});


