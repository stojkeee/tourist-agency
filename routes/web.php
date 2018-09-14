<?php

Route::get('/dashboard', 'OfferController@index');

Route::get('/', 'OfferController@home');

Route::get('/users', 'UserController@index');

Route::get('/all-orders', 'OfferController@all_index_order')->name('offers.all_index_order');

Route::post('/offers/{offer}/orders', 'OfferController@store_order')->name('offers.store_order');

Route::get('/orders', 'OfferController@index_order')->name('offers.index_order');

Route::delete('/offers/{offer}/orders', 'OfferController@destroy_order')->name('offers.destroy_order');

Route::resource('offers','OfferController');

Route::resource('users','UserController');

Auth::routes();
