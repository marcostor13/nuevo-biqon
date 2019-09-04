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

Route::get('/urls', 'URLController@index'); 
Route::get('/sinurls', 'URLController@indexSinUrls'); 
Route::get('/dashboard', 'URLController@indexDashboard'); 



Route::get('/messages', function () {
    return view('pages.messages');
});



Route::post('/uploadFile', 'fileController@uploadFile'); 
Route::post('/getItemsExcel', 'fileController@getItemsExcel'); 
Route::post('/getURLs', 'fileController@getURLs'); 
Route::post('/getWithoutURLs', 'fileController@getWithoutURLs'); 
Route::post('/sendUnitMessages', 'CoreController@sendUnitMessages'); 

Auth::routes();


Route::get('/{company}/{code}', 'fileController@routes');



