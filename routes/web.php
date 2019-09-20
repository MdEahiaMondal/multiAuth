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

Route::get('/home', 'Frontend\HomeController@index')->name('home');



// Start admin controller All Route Here
Route::get('admin/home', 'Backend\AdminController@index')->name('admin.home');
Route::get('admin/editor', 'Backend\EditorController@index')->name('admin.editor');
Route::get('admin/editor/all_admin', 'Backend\EditorController@adminList');

Route::GET('admin/register','Backend\Auth\RegisterController@showRegistrationForm');
Route::POST('admin/register','Backend\Auth\RegisterController@register')->name('admin.register');

Route::get('admin','Backend\Auth\LoginController@showLoginForm');
Route::POST('admin/login','Backend\Auth\LoginController@login')->name('admin.login');
Route::GET('admin/password/reset','Backend\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin/password/email','Backend\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin/password/reset/{token}','Backend\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::POST('admin/password/reset','Backend\Auth\ResetPasswordController@reset')->name('admin.password.update');