<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function (){
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/products', 'ProductController');
    Route::post('/products/search', 'ProductController@search')->name('admin.products.search');
});

Route::get('/', function () {
    return view('welcome');
});
