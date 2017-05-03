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
//use \Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/characters','CharacterController@index')->name('characterIndex');
Route::get('/characters/create','CharacterController@create');
Route::post('/characters/create','CharacterController@store');
Route::get('/users','UserController@index')->name('usersIndex');
Route::get('/users/create','UserController@create')->name('usersCreate');
Route::get('/users/store','UserController@store')->name('usersStore');
