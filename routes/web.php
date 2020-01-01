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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {
    //
});
Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function () {
    Route::get('/admin/hotel/create', 'HotelManageController@index');
    Route::post('/admin/hotel/register', 'HotelManageController@store');
    Route::get('/admin/hotel/list', 'HotelManageController@hotelList');
    Route::get('/admin/books/manage', 'HotelManageController@index');
    Route::get('/admin/users/manage', 'HotelManageController@index');
});
