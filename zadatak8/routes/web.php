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
    return view('welcome');
});

/* GetCategoriesController */
Route::get('/categories', 'GetCategoriesController@index')->name('categories');


/* GetCompanyController */
Route::get('/getcompany','GetCompanyController@index')->name('getcompany');
Route::post('/getcompany','GetCompanyController@postCompanyData')->name('getcompany');


/* AccountEntryController */
Route::get('/account','AccountEntryController@index')->name('account');
Route::get('/account','AccountEntryController@index')->name('account');
