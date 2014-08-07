<?php

// Public, not authenticated
Route::get('/', ['as' => 'home', function()
{
	return View::make('public.home');
}]);

// Authentication
Route::get('/auth', function()
{
	return Redirect::home();
});
Route::get('/auth/login', 'AuthController@create');
Route::get('/auth/logout', 'AuthController@destroy');
Route::resource('auth', 'AuthController', ['only' => ['create', 'store', 'destroy']]);

// Password resets
Route::controller('auth', 'RemindersController');

// Account registration
Route::get('/register', 'RegistrationController@create');
Route::get('/register/{token}', 'RegistrationController@edit');
Route::resource('register', 'RegistrationController', ['only' => ['create', 'store']]);

// Personal, authenticated
Route::group(['before' => 'auth'], function()
{
	Route::get('/me', 'MeController@index');

	Route::resource('/me/settings', 'ProfileSettingsController', ['only' => ['index', 'store']]);
});