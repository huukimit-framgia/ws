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

Route::group(['prefix' => '/', 'namespace' => 'Web'], function () {
    Route::get('/', 'HomeController@index')->name('web.home.index');
});

Route::group(['prefix' => '/admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin');
    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
Route::get('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.request');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.reset');
