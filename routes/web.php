<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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


Route::post('/sendEmail',function(Request $request){
	$user = new stdClass();
	$user->name = 'censupeg';
	$user->email = $request->email;
	$user->remember_token = $request->remember_token;

	\Mail::send(new \App\Mail\SendMail($user));
    return redirect('home');
});

Route::get('/recovery-password','\App\Http\Controllers\Auth\ForgotPasswordController@recoveryPassword')->name('recoveryPassword');
Route::get('/alter_new_password/{token}','\App\Http\Controllers\Auth\ForgotPasswordController@alter_new_password')->name('alter_new_password');
Route::post('/updatePassword','\App\Http\Controllers\Auth\ForgotPasswordController@updatePassword')->name('updatePassword');

Auth::routes();

Route::get('/',   'HomeController@index')->name('home');
Route::get('/home',   'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function() {
	Route::get('user', 'UserController@userShow')->name('userShow');

	Route::get('contact',      'ContactController@contactShow')->name('contactShow');
	Route::post('store',       'ContactController@store')->name('store');
	Route::put('updateContact/{id}','ContactController@updateContact')->name('updateContact');
	Route::get('editCourseContact/{idContact}/{idCourse}','ContactController@editCourseContact')->name('editCourseContact');
	Route::get('editCallContact/{idContact}/{idCall}','ContactController@editCallContact')->name('editCallContact');

	Route::get('destroy/{id}', 'ContactController@destroy')->name('destroy');
	Route::get('searchContact','ContactController@searchContact')->name('searchContact');
	Route::get('viewData/{id}','ContactController@viewData')->name('viewData');
	
	Route::get('call', 'CallController@callShow')->name('callShow');
	Route::get('searchCall','CallController@searchCall')->name('searchCall');
	Route::get('searchCallEdit','CallController@searchCallEdit')->name('searchCallEdit');
	Route::post('updateCall','CallController@updateCall')->name('updateCall');

	Route::post('storeCall','CallController@storeCall')->name('storeCall');
	Route::get('destroyCall/{id}','CallController@destroyCall')->name('destroyCall');

	Route::get('course', 	  'CourseController@courseShow')->name('courseShow');
	Route::get('searchCourse','CourseController@searchCourse')->name('searchCourse');
	Route::post('storeCourse', 'CourseController@storeCourse')->name('storeCourse');
	Route::get('destroyCourse/{id}', 'CourseController@destroyCourse')->name('destroyCourse');
	Route::get('listCourse','CourseController@listCourse')->name('listCourse');
	Route::get('view_details_course/{id}','CourseController@view_details_course')->name('view_details_course');
	Route::post('updateCourse','CourseController@updateCourse')->name('updateCourse');


	Route::get('interestShow','InterestController@interestShow')->name('interestShow');
	Route::get('routeForCorrect','InterestController@routeForCorrect')->name('routeForCorrect');
	Route::get('correctRegister/{id}','InterestController@correctRegister')->name('correctRegister');
	Route::post('interestStore','InterestController@interestStore')->name('interestStore');
	Route::get('destroyInterestCourse/{id}','InterestController@destroyInterestCourse')->name('destroyInterestCourse');
	Route::get('report', 	  'ReportController@reportShow')->name('reportShow');
	Route::get('myaccount', 	  'MyAccountController@myaccountShow')->name('myaccountShow');

	Route::put('updateRegister/{id}','InterestController@updateRegister')->name('updateRegister');
	Route::post('updateInterestCourse','InterestController@updateInterestCourse')->name('updateInterestCourse');
	Route::get('searchInterest','InterestController@searchInterest')->name('searchInterest');

	Route::delete('destroyUser', 'UserController@destroyUser')->name('destroyUser');
	Route::put('updateUser', 'UserController@updateUser')->name('updateUser');	
});
