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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::group(['api' => 'postApi'], function () {
    Route::get('/postApi', 'ApiController@postApi');
    Route::post('/post', 'PagesController@postupload');
    Route::post('/images-upload', 'PagesController@imageupload');
});

Route::get('/{view?}', 'PagesController@landing')->where('view', '(.*)')->name('landing');
