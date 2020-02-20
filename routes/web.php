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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'ReturnShopController@index')->name('showList');
Route::get('showShop', 'ReturnShopController@showShop')->name('showShop');
Route::get('showBlog', 'ReturnShopController@showBlog')->name('showBlog');
Route::get('showCart', 'ReturnShopController@showCart')->name('showCart');
Route::get('singleBlog-{id}', 'ReturnShopController@singleBlog')->name('singleBlog');
Route::get('/search', 'ReturnShopController@search')->name('shop.search');
Route::get('/findBySize-{id}', 'ReturnShopController@findProductBySizeId')->name('shop.searchBySize');
Route::get('/findByForm-{id}', 'ReturnShopController@findProductByFormId')->name('shop.searchByForm');
Route::get('/findByTheme-{id}', 'ReturnShopController@findProductByThemeId')->name('shop.searchByTheme');
Route::get('/findByType-{id}', 'ReturnShopController@findProductByTypeId')->name('shop.searchByType');
Route::get('/findByColor-{id}', 'ReturnShopController@findProductByColorId')->name('shop.searchByColor');



Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.index');

    Route::prefix('size')->group(function () {
        Route::get('/list', 'SizeController@index')->name('size.index');
        Route::get('/create', 'SizeController@create')->name('size.create');
        Route::post('/store', 'SizeController@store')->name('size.store');
        Route::get('/{id}/destroy', 'SizeController@destroy')->name('size.destroy');
        Route::get('/{id}/edit', 'SizeController@edit')->name('size.edit');
        Route::post('/{id}/update', 'SizeController@update')->name('size.update');
    });

    Route::prefix('/post')->group(function () {
        Route::get('/', 'PostController@index')->name('post.index');
        Route::get('/create', 'PostController@create')->name('post.create');
        Route::post('/create', 'PostController@store')->name('post.store');
        Route::get('/delete/{id}', 'PostController@destroy')->name('post.delete');
        Route::get('/edit/{id}', 'PostController@edit')->name('post.edit');
        Route::post('/edit/{id}', 'PostController@update')->name('post.update');
    });

    Route::prefix('users')->group(function () {
        Route::get('/index', 'UserController@index')->name('user.index');
        Route::get('/delete/{id}', 'UserController@destroy')->name('user.destroy');
        Route::post('/edit/{id}', 'UserController@update')->name('user.edit');
    });

    Route::prefix('color')->group(function () {
        Route::get('/', 'ColorController@index')->name('color.list');
        Route::get('/create', 'ColorController@create')->name('color.create');
        Route::post('/store', 'ColorController@store')->name('color.store');
        Route::get('/{id}/destroy', 'ColorController@destroy')->name('color.destroy');
        Route::get('/{id}/edit', 'ColorController@edit')->name('color.edit');
        Route::post('/{id}/update', 'ColorController@update')->name('color.update');
    });

    Route::prefix('themes')->group(function () {
        Route::get('/index', 'ThemeController@index')->name('theme.index');
        Route::get('/delete/{id}', 'ThemeController@destroy')->name('theme.destroy');
        Route::post('/create', 'ThemeController@store')->name('theme.create');
        Route::post('/edit/{id}', 'ThemeController@update')->name('theme.edit');
    });

    Route::prefix('forms')->group(function () {
        Route::get('/index', 'FormController@index')->name('form.index');
        Route::get('/delete/{id}', 'FormController@destroy')->name('form.destroy');
        Route::post('/create', 'FormController@store')->name('form.create');
        Route::post('/edit/{id}', 'FormController@update')->name('form.edit');
    });

    Route::prefix('/product')->group(function () {
        Route::get('/', 'ProductController@index')->name('product.index');
        Route::get('/create', 'ProductController@create')->name('product.create');
        Route::post('/create', 'ProductController@store')->name('product.store');
        Route::get('/delete/{id}', 'ProductController@destroy')->name('product.delete');
        Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::post('/edit/{id}', 'ProductController@update')->name('product.update');
    });

    Route::prefix('types')->group(function () {
        Route::get('/', 'TypeController@index')->name('type.list');
        Route::get('/create', 'TypeController@create')->name('type.create');
        Route::post('/store', 'TypeController@store')->name('type.store');
        Route::get('/{id}/destroy', 'TypeController@destroy')->name('type.destroy');
        Route::get('/{id}/edit', 'TypeController@edit')->name('type.edit');
        Route::post('/{id}/update', 'TypeController@update')->name('type.update');

    });

    Route::prefix('reviews')->group(function () {
        Route::get('/index', 'ReviewController@index')->name('review.index');
        Route::get('/delete/{id}', 'ReviewController@destroy')->name('review.destroy');
        Route::post('/create', 'ReviewController@store')->name('review.create');
        Route::post('/edit/{id}', 'ReviewController@update')->name('review.edit');
    });

    Route::prefix('comments')->group(function (){
        Route::get('/','CommentController@index')->name('comment.index');
        Route::post('create','CommentController@store')->name('comment.store');
        Route::get('delete/{id}','CommentController@destroy')->name('comment.delete');
        Route::get('edit/{id}','CommentController@edit')->name('comment.edit');
        Route::post('edit/{id}','CommentController@update')->name('comment.update');
    });
});









