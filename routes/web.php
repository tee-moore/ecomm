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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');

Route::get('/brands', 'BrandController@index')->name('brand.index');
Route::get('/brand/{brand}', 'BrandController@show')->name('brand.show')->where('brand', '[A-Za-z0-9_]');

Route::get('/categories', 'CategoryController@index')->name('category.index');
Route::get('/category/{category}', 'CategoryController@show')->name('category.show')->where('category', '[A-Za-z0-9_]+');

Route::get('/tags', 'TagController@index')->name('tag.index');
Route::get('/tag/{tag}', 'TagController@show')->name('tag.show')->where('tag', '[A-Za-z0-9_]+');




Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\AdminDashboardController@index')->name('admin.index');

    Route::get('/products', 'Admin\AdminProductController@index')->name('admin.product.index');
    Route::get('/product/{id}', 'Admin\AdminProductController@edit')->name('admin.product.edit')->where('id', '[0-9]+');
    Route::post('/product/{id}', 'Admin\AdminProductController@update')->name('admin.product.update')->where('id', '[0-9]+');
    Route::get('/product/add', 'Admin\AdminProductController@create')->name('admin.product.create');
    Route::post('/product/add', 'Admin\AdminProductController@store')->name('admin.product.store');
    Route::delete('/product/{id}', 'Admin\AdminProductController@destroy')->name('admin.product.destroy')->where('id', '[0-9]+');


    Route::get('/users', 'Admin\AdminUserController@index')->name('admin.user.index');
    Route::get('/roles', 'Admin\AdminRoleController@index')->name('admin.role.index');
    Route::get('/brands', 'Admin\AdminBrandController@index')->name('admin.brand.index');
    Route::get('/categories', 'Admin\AdminCategoryController@index')->name('admin.category.index');
    Route::get('/tags', 'Admin\AdminTagController@index')->name('admin.tag.index');
});
