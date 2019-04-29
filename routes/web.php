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

Route::get('/', 'IndexController@index');
//Route::get('/results', 'HotelController@search');
Route::resource('results', 'HotelController');






Route::get('/about', function () {
    return view('about');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/hotels', function () {
    return view('hotels');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/tours', function () {
    return view('tours');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('offers','OffersController');
Route::resource('excursions','ExcursionsController');
Route::resource('contact', 'ContactController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
