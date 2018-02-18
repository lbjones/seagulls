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
    return redirect('/exterior');
});

Route::get('/exterior', 'PhotoController@exterior')->name('exterior');

Route::get('/interior', 'PhotoController@interior')->name('interior');

Route::get('/performance', 'PhotoController@performance')->name('performance');

Route::get('/information', 'PhotoController@information')->name('information');
Route::post('/information', 'PhotoController@postInformation');

Route::get('/pricing', 'PhotoController@pricing')->name('pricing');
