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

use App\Website;
use App\History;

Route::get('/', function () {
	$search = null;
	$data = History::orderBy('id', 'DESC')->take(5)->get();
    return view('welcome', compact('search','data'));
});

// route::resource('login', 'AdminController');
// Route::post('auth/login', 'Auth\LoginController@login');

// route::resource('hoaxdetector', 'HoaxDetectorController');
// route::resource('reliablesite', 'ReliableSiteController');
// route::resource('hoaxexample', 'HoaxExampleController');
// route::resource('recentreport', 'RecentReportController');
// route::resource('tips', 'TipsController');
Auth::routes();

Route::get('/home', 'HomeController@index');
route::resource('website', 'AdminController');
route::get('history', 'AdminController@history');
Route::get('result', 'HoaxDetectorController@result');
//Route::get('search', 'SearchController@search');
Route::post('search', 'SearchController@search');
