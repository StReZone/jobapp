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
    return redirect('applicants');
});
//Route::resource('applicants','ApplicantController');

Route::get('/login', function() {
    return view('applicants.login');
});
Route::get('/register', function() {
    return view('applicants.register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth','role:admin'] ], function() {
//     Route::resource('admin','ManagerController');
// });
Route::group(['middleware' => ['auth','role:applicant']], function() {
    Route::resource('applicants','ApplicantController');

});
