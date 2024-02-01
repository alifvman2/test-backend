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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');

Route::get('soal_1', 'App\Http\Controllers\HomeController@soal_1')->name('soal_1');
Route::post('jawab_1', 'App\Http\Controllers\HomeController@jawab_1')->name('jawab_1');

Route::get('soal_2', 'App\Http\Controllers\HomeController@soal_2')->name('soal_2');
Route::post('jawab_2', 'App\Http\Controllers\HomeController@jawab_2')->name('jawab_2');

Route::get('soal_3', 'App\Http\Controllers\HomeController@soal_3')->name('soal_3');
Route::post('jawab_3', 'App\Http\Controllers\HomeController@jawab_3')->name('jawab_3');
