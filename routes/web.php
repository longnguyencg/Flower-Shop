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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::prefix('size')->group(function () {
        Route::get('/list','SizeController@index')->name('size.index');
        Route::get('/create','SizeController@create')->name('size.create');
        Route::post('/store','SizeController@store')->name('size.store');
        Route::get('/{id}destroy','SizeController@destroy')->name('size.destroy');
        Route::get('/{id}edit','SizeController@edit')->name('size.edit');
        Route::post('/{id}update','SizeController@update')->name('size.update');
    });

    Route::prefix('/post')->group(function (){
        Route::get('/list','PostController@index')->name('post.index');
        Route::get('/create','PostController@create')->name('post.create');
    });

    Route::prefix('color')->group(function () {
        Route::get('/','ColorController@index')->name('color.list');
        Route::get('/create','ColorController@create')->name('color.create');
        Route::post('/store','ColorController@store')->name('color.store');
    });
});







