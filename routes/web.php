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

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de los Usuarios
Route::get('/usuario/login','UserController@loginview')->name('user.loginview') -> middleware('guest');
Route::get('/usuario/registrar','UserController@index')->name('user.registrer') -> middleware('guest');
Route::post('/usuario/crear','UserController@create')->name('usuario.create');
Route::post('/login','UserController@login')->name('user.login');
Route::get('/chat', 'ChatController@index')->name('chat.index');
//Chats agregar contactos
Route::get('/nuevo/chat','ChatController@create')->name('chat.new');
//abrir conversación 
Route::get('/chat/nochat/{idchat}', 'ChatController@CargarConversacion')->name('chat.CargarConversacion');
//enviar mensaje de una conversacion
Route::post('/chat/escribir','MensajesController@escribir')->name('mensaje.escribir');
//Decifrar
Route::get('/mensaje/decifrar','MensajesController@decifrar')->name('mensaje.decrypt');

//Cerrar Sesion
Route::post('/logout','UserController@logout')->name('logout');
