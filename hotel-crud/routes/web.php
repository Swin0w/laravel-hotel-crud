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

Route::get('/', 'TestController@employees')
    -> name('employees');
Route::get('/detail/{id}', 'TestController@detail')
    -> name('detail');
Route::get('/create/employees', 'TestController@create')
    -> name('new');
Route::post('/store/employees', 'TestController@create')
    -> name('new');
Route::get('/destroy/{id}', 'TestController@destroy')
    -> name('destroy');
Route::get('/edit/employees/{id}', 'TestController@edit')
    -> name('edit');