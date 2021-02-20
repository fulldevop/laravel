<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/password/reset', function () {
    return view('auth.passwords.reset');
})->name('password.request');

Auth::routes();

Route::get('/cabinet', 'Cabinet\HomeController@index')->name('cabinet');
