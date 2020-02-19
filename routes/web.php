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

Route::get('/', 'ReturnShopController@index')->name('showList');
//    Route::get('index','ReturnShopController@index')->name('showList');
Route::get('showShop', 'ReturnShopController@showShop')->name('showShop');
Route::get('showBlog', 'ReturnShopController@showBlog')->name('showBlog');



Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });



    Route::prefix('/post')->group(function () {
        Route::get('/list', 'PostController@index')->name('post.index');
        Route::get('/create', 'PostController@create')->name('post.create');

    });

    Route::prefix('color')->group(function () {
        Route::get('/', 'ColorController@index')->name('color.list');
        Route::get('/create', 'ColorController@create')->name('color.create');
        Route::post('/store', 'ColorController@store')->name('color.store');
        Route::get('/{id}destroy', 'ColorController@destroy')->name('color.destroy');
        Route::get('/{id}edit', 'ColorController@edit')->name('color.edit');
        Route::post('/{id}update', 'ColorController@update')->name('color.update');
    });


    Route::prefix('types')->group(function () {
        Route::get('/', 'TypeController@index')->name('type.list');
        Route::get('/create', 'TypeController@create')->name('type.create');
        Route::post('/store', 'TypeController@store')->name('type.store');
        Route::get('/{id}destroy', 'TypeController@destroy')->name('type.destroy');
        Route::get('/{id}edit', 'TypeController@edit')->name('type.edit');
        Route::post('/{id}update', 'TypeController@update')->name('type.update');

    });

    Route::prefix('themes')->group(function () {
        Route::get('/index', 'ThemeController@index')->name('theme.index');
        Route::get('/delete/{id}', 'ThemeController@destroy')->name('theme.destroy');
        Route::post('/create', 'ThemeController@store')->name('theme.create');
        Route::post('/edit/{id}', 'ThemeController@update')->name('theme.edit');

    });
});











