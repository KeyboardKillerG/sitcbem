<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class,'mostrarAfiliados']);

Route::get('/agregarafiliado',[PagesController::class,'agregarAfiliado'])->name('afiliado.agregar'); //Vista para capturar datos de nuevo afiliado

Route::post('/insertarAfiliado',[PagesController::class,'insertarAfiliado'])->name('afiliado.insertar'); //Inserta el afiliado nuevo a la base de datos.

Route::get('/mostrarAfiliados',[PagesController::class,'mostrarAfiliados'])->name('afiliados.mostrar'); //Inserta el afiliado nuevo a la base de datos.

Route::delete('/eliminarAfiliado/{id}', [PagesController::class,'eliminarAfiliado'])->name('afiliado.eliminar');

Route::get('/editarAfiliado/{id}', [PagesController::class,'editarAfiliado'])->name('afiliado.editar');

Route::put('/editarAfiliado/{id}', [PagesController::class,'updateAfiliado'])->name('afiliado.update');

//Centros Trabajo
Route::get('/agregarCentroTrabajo',[PagesController::class,'agregarCentroTrabajo'])->name('centroTrabajo.agregar');

Route::post('/insertarCentroTrabajo',[PagesController::class,'insertarCentroTrabajo'])->name('centroTrabajo.insertar'); //Inserta el afiliado nuevo a la base de datos.

Route::get('/mostrarCentrosTrabajo',[PagesController::class,'mostrarCentrosTrabajo'])->name('centrosTrabajo.mostrar'); //Inserta el afiliado nuevo a la base de datos.

Route::delete('/eliminarCentroTrabajo/{id}', [PagesController::class,'eliminarCentroTrabajo'])->name('centroTrabajo.eliminar');

Route::get('/editarCentroTrabajo/{id}', [PagesController::class,'editarCentroTrabajo'])->name('centroTrabajo.editar');

Route::put('/editarCentroTrabajo/{id}', [PagesController::class,'updateCentroTrabajo'])->name('centroTrabajo.update');
