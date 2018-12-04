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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@edit')->middleware('auth');

Route::put('/profile', 'ProfileController@update')->middleware('auth');

Route::resource('/alerts', 'AlertsController')->middleware('auth', ['except' => ['show']]);

Route::resource('/contacts', 'ContactsController')->middleware('auth');

Route::get('send_test_email', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->to('jacobthall94@gmail.com');
	});
});
