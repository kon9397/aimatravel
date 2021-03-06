<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\TourController;

use \App\Http\Controllers\RegistrationController;

use \App\Http\Controllers\SessionsController;

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

Route::get('admin/tours/add', "\App\Http\Controllers\TourController@addFormIndex")->middleware('auth')->middleware('role:ROLE_ADMIN');
Route::post('admin/tours/add', array('as' => 'tour.store', 'uses' => '\App\Http\Controllers\TourController@addTour'))->middleware('auth')->middleware('role:ROLE_ADMIN');

Route::get('admin/tours/edit/{id}', "\App\Http\Controllers\TourController@editTour")->middleware('auth')->middleware('role:ROLE_ADMIN');

Route::post('admin/tours/edit/{id}', array('as' => 'tour.update', 'uses' => '\App\Http\Controllers\TourController@updateTour'))->middleware('auth')->middleware('role:ROLE_ADMIN');

Route::get('admin/tours/delete/{id}', '\App\Http\Controllers\TourController@deleteTour')->middleware('auth')->middleware('role:ROLE_ADMIN');

Route::get('auth/register', "\App\Http\Controllers\RegistrationController@create");

Route::post('auth/register', "\App\Http\Controllers\RegistrationController@store");

Route::get('auth/login', "\App\Http\Controllers\SessionsController@create")->name('login');

Route::post('auth/login', "\App\Http\Controllers\SessionsController@store");
Route::get('auth/logout', "\App\Http\Controllers\SessionsController@destroy");

Route::get('/admin', '\App\Http\Controllers\AdminController@index')->middleware('auth')->middleware('role:ROLE_ADMIN');

Route::get('/admin/tours', '\App\Http\Controllers\TourController@show')->middleware('auth')->middleware('role:ROLE_ADMIN');
