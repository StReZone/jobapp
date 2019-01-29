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
    return redirect(route('login'));
 });

Auth::routes();



Route::group(['middleware' => ['auth','role:admin'] ], function() {
     Route::resource('admin','AdminController');
     
});

Route::group(['middleware' => ['auth','role:applicant']], function() {
    Route::resource('applicants','ApplicantController');
    Route::get('/upload','ApplicantController@upload')->name('upload');
    Route::post('/storeUpload','ApplicantController@storeUpload')->name('storeUpload');
});

Route::get('/home', 'HomeController@index')->name('home');