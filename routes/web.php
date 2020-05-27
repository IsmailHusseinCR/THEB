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