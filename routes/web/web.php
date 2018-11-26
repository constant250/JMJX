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
	return redirect('/dashboard');
});

Route::get('home', function() {
	return redirect('/dashboard');
});

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::get('/sample','HomeController@TestPage');
// Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
// Route::get('/agent', 'Agent\AgentController@index');

// Global Search
// Route::get('/global-search', 'HomeController@global_search');
