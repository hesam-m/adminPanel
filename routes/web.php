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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard','OwnerController@index')->name('dashboard.index');
Route::get('dashboard/owners','OwnerController@getOwners')->name('dashboard.owners');
Route::get('dashboard/register','OwnerController@getRegister')->name('dashboard.register');
Route::post('dashboard/store','OwnerController@postStore')->name('dashboard.store');

