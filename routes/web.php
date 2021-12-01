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
    return view('welcome');
});



Route::resource('persona', 'PersonaController');
Route::get('imprimirPersonas','PdfController@imprimirPersonas')->name('imprimirPersonas');
Route::get('imprimirRegistro/{imprimirRegistro}/{documento}','PdfController@imprimirRegistroP')->name('imprimirRegistro');

Route::resource('rusuario', 'UserController');
Route::resource('restudiante', 'EstudianteController');
Route::resource('creater', 'RolController');
Route::resource('rdirectivo', 'DirectivoController');


//Route::post('/registro', 'Auth\RegisterController@create')->name('register');
//Route::post('/registroe', 'EstudianteController@store')->name('registroe');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// ruta de formulario
Route::get('/form', 'ControllerMail@index');
// ruta al enviar correo
Route::post('/send', 'ControllerMail@send');

//Rutas de Solicitud
Route::resource('solicitud', 'SolicitudController');
Route::get('imprimirSolicitud/{imprimirSolicitud}','PdfController@imprimirSolicitud')->name('imprimirSolicitud');
