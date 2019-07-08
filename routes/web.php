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

Route::get('admin','AdminController@index')->name('admin');
Route::get('admin-user', 'AdminController@user')->name('admin.user');
Route::get('admin-login', 'admin\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'admin\AdminLoginController@login')->name('admin.login');
Route::get('admin-logout', 'admin\AdminLoginController@logout')->name('admin.logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
