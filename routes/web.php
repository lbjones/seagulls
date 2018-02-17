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

Route::get('/exterior', function () {
    $exterior_files = Storage::files('/images/exterior/');
    return view('gallery')->with([
        'files' => $exterior_files
    ]);
})->name('exterior');

Route::get('/interior', function () {
    $interior_files = Storage::files('/images/interior');
    return view('gallery')->with([
        'files' => $interior_files
    ]);
})->name('interior');
