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

Route::view('/vue-basic', 'basic')->name('basic');
Route::view('/vue-anims', 'animations')->name('anims');
Route::view('/vue-comp', 'components')->name('comp');
Route::view('/vue-router', 'routers')->name('router');
Route::view('/vue-task', 'task')->name('task');
Route::view('/vue-adaptive', 'adaptive')->name('adaptive');
Route::view('/vue-reverse', 'reverse')->name('reverse');
Route::get('/vue-start', 'StartController@index')->name('start');
Route::get('/vue-start/get-json', 'StartController@getJson')->name('getJson');
Route::get('/vue-start/data-chart', 'StartController@chartData')->name('chartData');
Route::get('/vue-start/random-chart', 'StartController@randomChart')->name('randomChart');
