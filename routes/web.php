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
    return view('welcome');
});

Auth::routes();
Route::get('blusas', function () {
    return view('layouts.blusas');
});

Auth::routes();

Route::get('jeans', function () {
    return view('layouts.jeans');
});

Auth::routes();

Route::get('contactos', function () {
    return view('layouts.contactos');
});
Auth::routes();

Route::get('menu', function () {
    return view('layouts.menu');
});

Auth::routes();


Route::get('inicio', function () {
    return view('layouts.inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
