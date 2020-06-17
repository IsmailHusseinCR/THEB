<?php

use Illuminate\Support\Facades\Route;

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

// Route::view('/', 'index');
Route::get('/test/{id}', 'CategoryController@show');

Route::get('/', 'CategoryController@index');
Route::get('/search', 'ArticleController@search');
Route::view('/brain', 'show');
Route::get('/calculations', 'CalculationController@index');
Route::get('/calculations/{id}', 'CalculationController@calc');
Route::get('/roles/{roles}', 'CalculationController@roles');
Route::get('/ai','CalculationController@ai');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

