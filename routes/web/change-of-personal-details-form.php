<?php

/*
|--------------------------------------------------------------------------
| Configurations Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'change-of-personal-details-form', 'namespace' => ''], function() {
    Route::get('', function() {
    	return view('change-of-personal-details-form.index');
    })->name('change-of-personal-details-form.index');
});