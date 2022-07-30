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
Route::get('eliminarCarrera/{id_carrera}', 'ControllerCarrera@eliminarCarrera')->name('eliminarCarrera');
Route::get('editarCarrera/{id_carrera}','ControllerCarrera@editarCarrera')->name('editarCarrera');
Route::put('updateCarrera', 'ControllerCarrera@updateCarrera')->name('updateCarrera');
Route::post('searchCarrera', 'ControllerCarrera@searchCarrera')->name('searchCarrera');


#---------------------- Modulo Universidads 
Route::get('listaUniversidad/{id_search}/{search}', 'ControllerUniversidad@listaUniversidad')->name('listaUniversidad');
Route::get('formularioUniversidad','ControllerUniversidad@formularioUniversidad')->name('formularioUniversidad');
Route::post('agregarUniversidad', 'ControllerUniversidad@agregarUniversidad')->name('agregarUniversidad');
Route::get('eliminarUniversidad/{id_universidad}', 'ControllerUniversidad@eliminarUniversidad')->name('eliminarUniversidad');
Route::get('editarUniversidad/{id_universidad}','ControllerUniversidad@editarUniversidad')->name('editarUniversidad');
Route::put('updateUniversidad', 'ControllerUniversidad@updateUniversidad')->name('updateUniversidad');
Route::post('searchUniversidad', 'ControllerUniversidad@searchUniversidad')->name('searchUniversidad');


#---------------------- Modulo Profesion
Route::get('listaProfesion/{id_search}/{search}', 'ControllerProfesion@listaProfesion')->name('listaProfesion');
Route::get('formularioProfesion','ControllerProfesion@formularioProfesion')->name('formularioProfesion');
Route::post('agregarProfesion', 'ControllerProfesion@agregarProfesion')->name('agregarProfesion');
Route::get('eliminarProfesion/{id_profesion}', 'ControllerProfesion@eliminarProfesion')->name('eliminarProfesion');
Route::get('editarProfesion/{id_profesion}','ControllerProfesion@editarProfesion')->name('editarProfesion');
Route::put('updateProfesion', 'ControllerProfesion@updateProfesion')->name('updateProfesion');
Route::post('searchProfesion', 'ControllerProfesion@searchProfesion')->name('searchProfesion');


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

#----------------------- Modulo Portafolio
Route::get('portafolio','ControllerPortafolio@portafolio')->name('portafolio');

#----------------------- Modulo Formulario
Route::get('formulario/{id_curso}','ControllerFormulario@formulario')->name('formulario');
Route::post('formularioEvaluacion','ControllerFormulario@formularioEvaluacion')->name('formularioEvaluacion');
Route::get('formularioEvaluacionGet/{id_curso}/{profesion}/{id_universidad}/{otrouniveridad}','ControllerFormulario@formularioEvaluacionGet')->name('formularioEvaluacionGet');
Route::post('formularioBuscar','ControllerFormulario@formularioBuscar')->name('formularioBuscar');
Route::get('formularioBuscarGet/{id_curso}/{profesion}/{id_universidad}/{otrouniveridad}','ControllerFormulario@formularioBuscarGet')->name('formularioBuscarGet');
Route::post('formularioFormulario','ControllerFormulario@formularioFormulario')->name('formularioFormulario');

Route::get('formularioFormularioGet/{id_curso}/{profesion}/{id_universidad}/{otrouniveridad}/{ci}/{ru}','ControllerFormulario@formularioFormularioGet')->name('formularioFormularioGet');

Route::post('formularioConfirmar','ControllerFormulario@formularioConfirmar')->name('formularioConfirmar');
Route::get('formularioConfirmarGet/{id_persona}/{id_estudiante}/{id_curso}/{profesion}/{id_universidad}/{otrouniveridad}/{ci}/{ru}/{nombre}/{paterno}/{materno}/{correo}/{celular}/{id_grado}/{id_carrera}/{otra_carrera}','ControllerFormulario@formularioConfirmarGet')->name('formularioConfirmarGet');

Route::post('agregarEstudiante','ControllerFormulario@agregarEstudiante')->name('agregarEstudiante');
Route::get('formularioResult/{id_curso}/{id_persona}/{id_estudiante}/{inscrito}/{id_inscrito}','ControllerFormulario@formularioResult')->name('formularioResult');

Route::get('boletaInscrito/{id_curso}/{id_persona}/{id_estudiante}/{id_inscrito}','ControllerPdf@boletaInscrito')->name('boletaInscrito');


#----------------------- Modulo Estudiante
Route::get('listaEstudiante/{id_search}/{search}', 'ControllerEstudiante@listaEstudiante')->name('listaEstudiante');
Route::get('formularioEstudiante','ControllerEstudiante@formularioEstudiante')->name('formularioEstudiante');
Route::post('agregarEstudiante', 'ControllerEstudiante@agregarEstudiante')->name('agregarEstudiante');
Route::get('editarEstudiante/{id_estudiante}','ControllerEstudiante@editarEstudiante')->name('editarEstudiante');
Route::put('updateEstudiante', 'ControllerEstudiante@updateEstudiante')->name('updateEstudiante');
Route::post('searchEstudiante', 'ControllerEstudiante@searchEstudiante')->name('searchEstudiante');
