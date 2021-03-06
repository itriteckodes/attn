<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard.index');
});


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.',], function () {
        Route::resource('student','StudentController');
        Route::get('attendence/index','AttendenceController@index')->name('attendence.index');
    });
    });
