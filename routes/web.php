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
	Route::get('contact', 'ContactController@index')->name('index');
	Route::post('store', 'ContactController@store')->name('store');
	Route::get('destroy/{id}', 'ContactController@destroy')->name('destroy');
	Route::get('search', 'ContactController@search')->name('search');
});