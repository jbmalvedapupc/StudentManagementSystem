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

Route::get('/', 'DashboardController@index')->name('dashboard.index');
// Student Module
Route::get('/students', 'StudentController@index')->name('students.index');
Route::get('/students/create', 'StudentController@create')->name('students.create');