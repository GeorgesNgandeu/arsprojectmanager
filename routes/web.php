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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/main', function () {
        return view('main');
    })->name('main');

    Route::get('/processQuotation', function () {
        return view('processQuotation');
    })->name('processquotation');

    Route::get('/unprocessQuotation', function () {
        return view('unprocessQuotation');
    })->name('unprocessquotation');

    Route::post('/addproject', 'ProjectController@store')->name('addproject');
    Route::get('/addproject', 'ProjectController@index')->name('addproject');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});



