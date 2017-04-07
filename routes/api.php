<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => '/'], function () {
    // Authentication:
    Route::get('auth/check', 'Auth\AccountController@check')->name('api.auth.getAuth');

    // Authentication Routes...
    Route::post('login', 'Auth\LoginController@login')->name('auth.postLogin');
    Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');

    // Registration Routes...
//    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
    Route::post('register', 'Auth\RegisterController@register')->name('auth.postRegister');

    // Password Reset Routes...
//    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.email');
//    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.change');
});
