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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/',function (){
        return view('admin.dashboard');
    });


    Route::prefix('/post')->group(function (){
        Route::get('/','PostController@index')->name('post.index');
        Route::get('/create','PostController@create')->name('post.create');
        Route::post('/create','PostController@store')->name('post.store');
        Route::get('/delete/{id}','PostController@destroy')->name('post.delete');
        Route::get('/edit/{id}','PostController@edit')->name('post.edit');
        Route::post('/edit/{id}','PostController@update')->name('post.update');

    });

    Route::prefix('color')->group(function () {
        Route::get('/','ColorController@index')->name('color.list');
        Route::get('/create','ColorController@create')->name('color.create');
        Route::post('/store','ColorController@store')->name('color.store');
    });

    Route::prefix('/product')->group(function (){
        Route::get('/','ProductController@index')->name('product.index');
        Route::get('/create','ProductController@create')->name('product.create');
        Route::post('/create','ProductController@store')->name('product.store');
        Route::get('/delete/{id}','ProductController@destroy')->name('product.delete');
        Route::get('/edit/{id}','ProductController@edit')->name('product.edit');
        Route::post('/edit/{id}','ProductController@update')->name('product.update');

    });


});







