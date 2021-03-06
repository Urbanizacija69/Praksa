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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'IpAddresController@index')->name('welcome');
Route::post('/', 'IpAddresController@getIpInfo')->name('getIp');
Route::get('/home', 'IpAddresController@showDataGrid')->name('home');
Route::post('/home', 'IpAddresController@showDataGrid')->name('home');

