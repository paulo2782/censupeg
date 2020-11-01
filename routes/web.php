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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/',   'HomeController@index')->name('home');
Route::get('/home',   'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function() {
	Route::get('contact',      'ContactController@contactShow')->name('contactShow');
	Route::post('store',       'ContactController@store')->name('store');
	Route::put('updateContact/{id}','ContactController@updateContact')->name('updateContact');

	Route::get('destroy/{id}', 'ContactController@destroy')->name('destroy');
	Route::get('searchContact','ContactController@searchContact')->name('searchContact');
	Route::get('viewData/{id}','ContactController@viewData')->name('viewData');
	
	Route::get('call', 'CallController@callShow')->name('callShow');
	Route::get('searchCall','CallController@searchCall')->name('searchCall');
	Route::post('storeCall','CallController@storeCall')->name('storeCall');
	Route::get('destroyCall/{id}','CallController@destroyCall')->name('destroyCall');

	Route::get('course', 	  'CourseController@courseShow')->name('courseShow');
	Route::get('searchCourse','CourseController@searchCourse')->name('searchCourse');
	Route::post('storeCourse', 'CourseController@storeCourse')->name('storeCourse');
	Route::get('destroyCourse/{id}', 'CourseController@destroyCourse')->name('destroyCourse');
	Route::get('listCourse','CourseController@listCourse')->name('listCourse');

	Route::get('interestShow','InterestController@interestShow')->name('interestShow');
	Route::get('routeForCorrect','InterestController@routeForCorrect')->name('routeForCorrect');
	Route::get('correctRegister/{id}','InterestController@correctRegister')->name('correctRegister');
	Route::post('interestStore','InterestController@interestStore')->name('interestStore');
	Route::get('destroyInterestCourse/{id}','InterestController@destroyInterestCourse')->name('destroyInterestCourse');
	
	Route::put('updateRegister/{id}','InterestController@updateRegister')->name('updateRegister');
});
