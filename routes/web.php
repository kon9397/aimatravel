<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\TourController;

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

Route::resource('/', TourController::class);

Route::get('tours/add', "\App\Http\Controllers\TourController@addFormIndex");
Route::post('tours/add', array('as' => 'tour.store', 'uses' => '\App\Http\Controllers\TourController@addTour'));
