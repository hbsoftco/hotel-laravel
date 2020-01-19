<?php

Auth::routes();

Route::get('/home', 'HomeController@show')->name('home');
Route::get('/', 'HotelController@index');
Route::get('/hotel/{hotel}', 'HotelController@show');
Route::post('/hotel/reserve', 'BookController@store');
Route::get('/admin/books', 'BookController@index');

Route::group(['middleware' => ['web']], function () {
});
Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function () {
    Route::get('/admin/hotel/create', 'HotelManageController@index');
    Route::post('/admin/hotel/register', 'HotelManageController@store');
    Route::get('/admin/hotel/room/{id}', 'RoomManageController@show');
    Route::post('/admin/room/create', 'RoomManageController@store');
    Route::get('/admin/hotel/list', 'HotelManageController@hotelList');    
    Route::get('/admin/users/manage', 'HotelManageController@index');
});
