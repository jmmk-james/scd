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
Route::put('updateperfil','ControllerUsuario@updateperfil')->name('updateperfil');
Route::put('updatepass','ControllerUsuario@updatepass')->name('updatepass');
