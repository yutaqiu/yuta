<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/message', 'HomeController@index')->name('message');
