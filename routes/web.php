<?php

use App\Http\Controllers\ControllerSecion;
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

################################### PUBLICO ################################################
Route::get('/', 'ControllerPublico@index')->name('index');


################################### ADMINISTRACION #########################################
#----------------------- Inicio de Sesion 
Route::get('sesion', 'ControllerSecion@sesion')->name('sesion');
Route::post('login','ControllerSecion@login')->name('login');
Route::get('scd', 'ControllerSecion@scd')->name('scd');
Route::get('exit','ControllerSecion@exit')->name('exit');

#----------------------- Modulo Usuario
Route::get('perfil', 'ControllerUsuario@perfil')->name('perfil');
Route::get('perfilUsuario/{id_usuario}','ControllerUsuario@perfilUsuario')->name('perfilUsuario');
Route::put('updateperfil','ControllerUsuario@updateperfil')->name('updateperfil');
Route::put('updatepass','ControllerUsuario@updatepass')->name('updatepass');
Route::get('FormularioAgregarUsuario','ControllerUsuario@FormularioAgregarUsuario')->name('FormularioAgregarUsuario');
Route::post('AgregarUsuario','ControllerUsuario@AgregarUsuario')->name('AgregarUsuario');
Route::get('listaUsuario','ControllerUsuario@listaUsuario')->name('listaUsuario');
Route::get('eliminarUsuario/{id_usuario}',"Controllerusuario@eliminarUsuario")->name('eliminarUsuario');

#---------------------- Modulo Carreras 
Route::get('listaCarrera/{id_search}/{search}', 'ControllerCarrera@listaCarrera')->name('listaCarrera');
Route::get('formularioCarrera','ControllerCarrera@formularioCarrera')->name('formularioCarrera');
Route::post('agregarCarrera', 'ControllerCarrera@agregarCarrera')->name('agregarCarrera');
Route::get('eliminarCarrea/{id_carrera}', 'ControllerCarrera@eliminarCarrera')->name('eliminarCarrera');
Route::get('editarCarrera/{id_carrera}','ControllerCarrera@editarCarrera')->name('editarCarrera');
Route::put('updateCarrera', 'ControllerCarrera@updateCarrera')->name('updateCarrera');
Route::post('searchCarrera', 'ControllerCarrera@searchCarrera')->name('searchCarrera');