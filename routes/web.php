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
Route::get('/', 'ProductController@main')->name('main.page');
Route::get('/catalog', 'CatalogController@catalog')->name('catalog.page');

Auth::routes();
Route::group(['middleware'=>'auth', 'prefix'=>'home'], function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/products', 'ProductController');
    // разрешаем методы для публичной части
    //Route::resource('/home/posts', 'PostController')->except(['index', 'show']);
});











