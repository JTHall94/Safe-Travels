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
    return view('login');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/alerts', function () {
    return view('alerts');
});

Route::get('/signup', function () {
    return view('signup');
});
