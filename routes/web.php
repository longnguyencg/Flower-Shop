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
    Route::prefix('themes')->group(function (){
        Route::get('/index','ThemeController@index')->name('theme.index');
        Route::get('/delete/{id}','ThemeController@destroy')->name('theme.destroy');
        Route::post('/create','ThemeController@store')->name('theme.create');
        Route::post('/edit/{id}','ThemeController@update')->name('theme.edit');
    });
    Route::prefix('forms')->group(function (){
        Route::get('/index','FormController@index')->name('form.index');
        Route::get('/delete/{id}','FormController@destroy')->name('form.destroy');
        Route::post('/create','FormController@store')->name('form.create');
        Route::post('/edit/{id}','FormController@update')->name('form.edit');

    });
    Route::prefix('reviews')->group(function (){
        Route::get('/index','ReviewController@index')->name('review.index');
        Route::get('/delete/{id}','ReviewController@destroy')->name('review.destroy');
        Route::post('/create','ReviewController@store')->name('review.create');
        Route::post('/edit/{id}','ReviewController@update')->name('review.edit');
    });
});









