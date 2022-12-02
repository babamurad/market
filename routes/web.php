<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function (){
    Route::get('/', 'MainController@index')->name('admin.index');
});

Route::get('/', function () {
    return view('welcome');
});
