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

Route::get('/','PagesController@index')->name('index');
Route::get('/login','PagesController@login')->name('login');
Route::post('/login','PagesController@signin')->name('signin');
Route::get('/register','PagesController@register')->name('register');
Route::post('/register','PagesController@create')->name('create');
Route::get('/products','PagesController@products')->name('products');
Route::get('/admin','PagesController@signup')->name('signup');
Route::post('/admin','PagesController@adminSignup')->name('adminSignup');

//------------------Admin Routes ---------------------------------------------
Route::get('/dashboard','AdminController@dashboard')->name('dashboard');



