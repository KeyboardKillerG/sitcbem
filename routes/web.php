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

Route::get('/',[PagesController::class,'inicio']);

Route::get('/agregarafiliado',[PagesController::class,'agregarAfiliado']); //Vista para capturar datos de nuevo afiliado

Route::post('/insertarAfiliado',[PagesController::class,'insertarAfiliado'])->name('afiliado.insertar'); //Inserta el afiliado nuevo a la base de datos.

Route::get('/mostrarAfiliados',[PagesController::class,'mostrarAfiliados'])->name('afiliados.mostrar'); //Inserta el afiliado nuevo a la base de datos.

Route::delete('/eliminar/{id}', [PagesController::class,'eliminar'])->name('afiliado.eliminar');
