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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/product/{product}', 'ProductController@show')->where('product', '[A-Za-z0-9_]+')->name('product.show');

Route::get('/brands', 'BrandController@index')->name('brands.index');
Route::get('/brand/{brand}', 'BrandController@show')->where('brand', '[A-Za-z0-9_')->name('brand.show');

Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/category/{category}', 'CategoryController@show')->where('category', '[A-Za-z0-9_]+')->name('category.show');

Route::get('/tags', 'TagController@index')->name('tags.index');
Route::get('/tag/{tag}', 'TagController@show')->where('tag', '[A-Za-z0-9_]+')->name('tag.show');
