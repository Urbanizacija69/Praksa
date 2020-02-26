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

Route::get('/add_worker', 'AddWorkerController@getWorker')->name('add_worker');
Route::post('/add_worker', 'AddWorkerController@storeWorker')->name('add_worker');

Route::get('/list_workers', 'PagesController@showListWorker')->name('list_workers');

Route::get('/show_jobs', 'PagesController@showJobs')->name('show_jobs');

Route::get('/show_max_salary', 'PagesController@showMaxSalary')->name('show_max_salary');
Route::get('/show_min_salary', 'PagesController@showMinSalary')->name('show_min_salary');
Route::get('/show_avg_salary', 'PagesController@showAvgSalary')->name('show_avg_salary');
