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
})->name('home');


// Category
Route::get("/admin/category", "CategoryController@index")->name('category');
Route::get('/admin/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::get('/admin/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::put('/admin/category/update/{id}', 'CategoryController@update')->name('category.update');
Route::get('/admin/category/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');
Route::get('/admin/category/search','CategoryController@ajaxSearch')->middleware('cors')->name('category.ajaxsearch');
Route::get('/admin/category/searchh','CategoryController@search')->name('category.search');

// Product
Route::get("/admin/product", "ProductController@index")->name('product');
Route::get('/admin/product/create', 'ProductController@create')->name('product.create');
Route::post('/admin/product/store', 'ProductController@store')->name('product.store');
Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::put('product/update/{id}', 'ProductController@update')->name('product.update');
Route::get('/admin/product/destroy/{id}', 'ProductController@destroy')->name('product.destroy');
Route::get('/admin/product/search','ProductController@search')->name('product.search');
