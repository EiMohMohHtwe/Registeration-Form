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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/user','RegisterController@create');
//Route::post('/user', 'RegisterController@store');
//Route::get('/user/{userid}','RegisterController@show');

Route::get("register",'RegisterController@index');
Route::post("user", 'RegisterController@store');
