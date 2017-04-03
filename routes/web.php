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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    // Admin Authenticate:
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('auth.showLoginForm')->middleware('guest:admin');

    // Admin page:
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
//    Route::get('/orders', 'HomeController@index')->name('admin.order.list');
//    Route::get('/products', 'HomeController@index')->name('admin.product.list');
//    Route::get('/categories', 'CategoryController@index')->name('admin.category.list');
//    Route::get('/admins', 'HomeController@index')->name('admin.admin.list');
//    Route::get('/admins/create', 'HomeController@index')->name('admin.admin.create');
//    Route::get('/profile', 'HomeController@index')->name('admin.profile.showForm');
//    Route::get('/customers', 'HomeController@index')->name('admin.customer.list');
//    Route::get('reset/{token}', 'HomeController@index')->name('admin.auth.password.changePasswordForm');
//    Route::get('password/email', 'HomeController@index')->name('admin.auth.password.getResetForm');
//    Route::get('logout', 'Auth\LoginController@logout')->name('admin.auth.logout');
});
