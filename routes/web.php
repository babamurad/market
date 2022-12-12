<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function (){
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::get('/category/sort/{fname}', 'CategoryController@sort')->name('admin.categories.sort');
    Route::post('/category/search', 'CategoryController@search')->name('admin.categories.search');

    Route::resource('/tags', 'TagController');
    Route::resource('/products', 'ProductController');
    Route::post('/products/search', 'ProductController@search')->name('admin.products.search');
});

//Front
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/catalog/index', 'CatalogController@index')->name('catalog.index');
    Route::get('/catalog/category/{slug}', 'CatalogController@category')->name('catalog.category');
    Route::get('/catalog/brand/{slug}', 'CatalogController@brand')->name('catalog.brand');
    Route::get('/catalog/product/{slug}', 'CatalogController@product')->name('catalog.product');
});

Route::get('/', function () {
    return view('welcome');
});
