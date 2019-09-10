<?php

Route::group(['as' => 'admin.' ,'prefix' => 'admin', 'namespace' => 'Admin'], function () {

Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login')->name('login.post');
Route::get('logout', 'LoginController@logout')->name('logout');

});

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

});
