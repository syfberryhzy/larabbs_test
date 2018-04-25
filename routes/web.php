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

// Route::get('/', function () {
//     dd(123);
//     return view('welcome');
// });
Route::get('/', 'PagesController@root')->name('root');
//
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Authentication Routes...

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'AuthController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgetPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgetPasswordController@sendResetLinkReset')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showRequest')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::resource('users', 'UsersController', ['only' => 'show', 'update', 'edit']);
// Route::get('/users/{user}', 'UsersController@show')->name('users.show');
// Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
// Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
