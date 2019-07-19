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

Route::get('/urls', function () {
    return view('pages.urls');
});


Route::post('/uploadFile', 'fileController@uploadFile'); 
Route::post('/getItemsExcel', 'fileController@getItemsExcel'); 
Route::post('/getURLs', 'fileController@getURLs'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
