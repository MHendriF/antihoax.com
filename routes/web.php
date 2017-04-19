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

Route::get('/', function () {
    return view('welcome2');
});

route::resource('login', 'AdminController');
route::resource('hoaxdetector', 'HoaxDetectorController');
route::resource('reliablesite', 'ReliableSiteController');
route::resource('hoaxexample', 'HoaxExampleController');
route::resource('recentreport', 'RecentReportController');
route::resource('tips', 'TipsController');