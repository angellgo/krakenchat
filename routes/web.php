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
Route::get('chat', function () {
    return view('users.chat2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de los Usuarios
Route::get('/usuario/login','UserController@loginview')->name('user.loginview');
Route::get('/usuario/registrar','UserController@index')->name('user.registrer');
Route::post('/usuario/crear','UserController@create')->name('usuario.create');
Route::post('/chat','UserController@login')->name('user.login') -> middleware('userval');
