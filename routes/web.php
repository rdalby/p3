<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

//This actually calls the method to process the form
Route::post('/media/media-process', 'MediaController@mediaProcess');

//This calls the media controller and displays the results page
Route::get('/media', 'MediaController@mediaRequest');



//This view route will return the welcome view
Route::view('/', 'welcome');

