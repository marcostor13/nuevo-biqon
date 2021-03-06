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
Route::get('/uploadInfo', 'URLController@uploadInfo'); 
Route::get('/sinurls', 'URLController@indexSinUrls'); 
Route::get('/dashboard', 'URLController@indexDashboard'); 
Route::get('/uploads', 'URLController@indexUploads'); 
Route::get('/newLanding', 'URLController@indexNewLanding'); 
Route::get('/dashboard-biqon', 'URLController@indexDashboardBiqon'); 



Route::get('/landings/{name}', 'LandingController@index'); 



Route::get('/messages', function () {
    return view('pages.messages');
});


Route::post('/uploadDataBigQuery', 'GoogleController@uploadDataBigQuery'); 
Route::post('/getQueryBigquery', 'GoogleController@getQueryBigquery'); 
Route::post('/uploadFile', 'fileController@uploadFile'); 
Route::post('/getItemsExcel', 'fileController@getItemsExcel'); 
Route::post('/getURLs', 'fileController@getURLs'); 
Route::post('/getWithoutURLs', 'fileController@getWithoutURLs'); 
Route::post('/sendUnitMessages', 'CoreController@sendUnitMessages'); 
Route::post('/sendMail', 'LandingController@sendMail'); 
Route::post('/validateRut', 'LandingController@validateRut'); 
Route::post('/newLanding', 'LandingController@newLanding'); 
Route::post('/newClient', 'LandingController@newClient'); 
Route::post('/uploadData', 'URLController@uploadData'); 
Route::post('/events', 'LandingController@events'); 
Route::post('/getDataDashboard', 'URLController@getDataDashboard'); 
Route::post('/getReport', 'URLController@getReport'); 
Route::post('/getUrlByCode', 'fileController@getUrlByCode'); 




Auth::routes();


Route::get('/{company}/{code}', 'fileController@routes'); //URL CORTA

Route::get('/{code}', 'fileController@routes2'); //URL CORTA



