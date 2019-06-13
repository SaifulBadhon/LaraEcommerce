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
Route::get('/','PageController@index')->name('index');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/products', 'PageController@products')->name('product');

Route::get('/admin', 'PageControllerAdmin@index')->name('admin.index');
Route::get('/admin/create', 'PageControllerAdmin@create')->name('admin.product.create');
