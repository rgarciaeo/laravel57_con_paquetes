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



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	Auth::routes();

	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', [
		'as' => 'home',
		'uses' => 'HomeController@index'
	]);	

});


