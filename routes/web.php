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

// Route::get('/', function () {
//     return view('welcome');
//     //return 'Hello World';
// });

// Route::get('/luxtel', function () {
//     //return view('welcome');
//     return '';
// });
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');
Route::get('/login', 'PagesController@login');
Route::get('/premiere', 'PagesController@premiere');
Route::get('/suite', 'PagesController@suite');
Route::get('/guest', 'PagesController@guest');
Route::get('/about', 'PagesController@about');
Route::get('/rooms', 'PagesController@rooms');
Route::get('/admin', 'PagesController@admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customer', 'HomeController@customer')->name('customer');
Route::get('/book', 'HomeController@book')->name('book');
Route::get('/room', 'HomeController@room')->name('room');


Route::get('booking', 'HomeController@index');

Route::post('booking', 'HomeController@booking');
Route::post('payment', 'HomeController@payment');
