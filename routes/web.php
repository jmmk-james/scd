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
Route::get('listaUsuario/{id_search}/{search}','ControllerUsuario@listaUsuario')->name('listaUsuario');
Route::get('eliminarUsuario/{id_usuario}',"Controllerusuario@eliminarUsuario")->name('eliminarUsuario');
Route::post('searchUsuario', 'ControllerUsuario@searchUsuario')->name('searchUsuario');

#---------------------- Modulo Carreras 
Route::get('listaCarrera/{id_search}/{search}', 'ControllerCarrera@listaCarrera')->name('listaCarrera');
Route::get('formularioCarrera','ControllerCarrera@formularioCarrera')->name('formularioCarrera');
Route::post('agregarCarrera', 'ControllerCarrera@agregarCarrera')->name('agregarCarrera');
Route::get('eliminarCarrea/{id_carrera}', 'ControllerCarrera@eliminarCarrera')->name('eliminarCarrera');
Route::get('editarCarrera/{id_carrera}','ControllerCarrera@editarCarrera')->name('editarCarrera');
Route::put('updateCarrera', 'ControllerCarrera@updateCarrera')->name('updateCarrera');
Route::post('searchCarrera', 'ControllerCarrera@searchCarrera')->name('searchCarrera');

#---------------------- Modulo Tipo
Route::get('listaTipo/{id_search}/{search}', 'ControllerTipo@listaTipo')->name('listaTipo');
Route::get('formularioTipo','ControllerTipo@formularioTipo')->name('formularioTipo');
Route::post('agregarTipo', 'ControllerTipo@agregarTipo')->name('agregarTipo');
Route::get('eliminarTipo/{id_tipo}', 'ControllerTipo@eliminarTipo')->name('eliminarTipo');
Route::get('editarTipo/{id_tipo}','ControllerTipo@editarTipo')->name('editarTipo');
Route::put('updateTipo', 'ControllerTipo@updateTipo')->name('updateTipo');
Route::post('searchTipo', 'ControllerTipo@searchTipo')->name('searchTipo');

#---------------------- Modulo Grado
Route::get('listaGrado/{id_search}/{search}', 'ControllerGrado@listaGrado')->name('listaGrado');
Route::get('formularioGrado','ControllerGrado@formularioGrado')->name('formularioGrado');
Route::post('agregarGrado', 'ControllerGrado@agregarGrado')->name('agregarGrado');
Route::get('editarGrado/{id_grado}','ControllerGrado@editarGrado')->name('editarGrado');
Route::put('updateGrado', 'ControllerGrado@updateGrado')->name('updateGrado');
Route::post('searchGrado', 'ControllerGrado@searchGrado')->name('searchGrado');

#---------------------- Modulo Coordinador
Route::get('listaCoordinador/{id_search}/{search}', 'ControllerCoordinador@listaCoordinador')->name('listaCoordinador');
Route::get('formularioCoordinador','ControllerCoordinador@formularioCoordinador')->name('formularioCoordinador');
Route::post('agregarCoordinador', 'ControllerCoordinador@agregarCoordinador')->name('agregarCoordinador');
Route::get('perfilCoordinador/{id_coordinador}','ControllerCoordinador@perfilCoordinador')->name('perfilCoordinador');
Route::put('updatePersonaCoordinador', 'ControllerCoordinador@updatePersonaCoordinador')->name('updatePersonaCoordinador');
Route::put('updateCoordinador', 'ControllerCoordinador@updateCoordinador')->name('updateCoordinador');
Route::put('updateFirmaCoordinador', 'ControllerCoordinador@updateFirmaCoordinador')->name('updateFirmaCoordinador');
Route::post('searchCoordinador', 'ControllerCoordinador@searchCoordinador')->name('searchCoordinador');


#---------------------- Modulo Tipo Curso
Route::get('listaTipoCurso/{id_search}/{search}', 'ControllerTipoCurso@listaTipoCurso')->name('listaTipoCurso');
Route::get('formularioTipoCurso','ControllerTipoCurso@formularioTipoCurso')->name('formularioTipoCurso');
Route::post('agregarTipoCurso', 'ControllerTipoCurso@agregarTipoCurso')->name('agregarTipoCurso');
Route::get('eliminarTipoCurso/{id_tipo_curso}', 'ControllerTipoCurso@eliminarTipoCurso')->name('eliminarTipoCurso');
Route::get('editarTipoCurso/{id_tipo_curso}','ControllerTipoCurso@editarTipoCurso')->name('editarTipoCurso');
Route::put('updateTipoCurso', 'ControllerTipoCurso@updateTipoCurso')->name('updateTipoCurso');
Route::post('searchTipoCurso', 'ControllerTipoCurso@searchTipoCurso')->name('searchTipoCurso');

#---------------------- Modulo Curso
Route::get('listaCurso/{id_search}/{search}', 'ControllerCurso@listaCurso')->name('listaCurso');
Route::get('formularioCurso','ControllerCurso@formularioCurso')->name('formularioCurso');
Route::post('agregarCurso', 'ControllerCurso@agregarCurso')->name('agregarCurso');
Route::post('agregarCoordiandorCurso', 'ControllerCurso@agregarCoordinadorCurso')->name('agregarCoordinadorCurso');
Route::get('eliminarCoordinadorCurso/{id_coordinador}/{id_curso}','ControllerCurso@eliminarCoordinadorCurso')->name('eliminarCoordinadorCurso');
Route::get('perfilCurso/{id_curso}','ControllerCurso@perfilCurso')->name('perfilCurso');
Route::put('updateCurso','ControllerCurso@updateCurso')->name('updateCurso');
Route::put('updatePromo','ControllerCurso@updatePromo')->name('updatePromo');
Route::put('updatePlantilla','ControllerCurso@updatePlantilla')->name('updatePlantilla');
Route::put('updateTipoCurso', 'ControllerCurso@updateTipoCurso')->name('updateTipoCurso');
Route::post('searchCurso', 'ControllerCurso@searchCurso')->name('searchCurso');

