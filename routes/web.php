<?php

/*
@author: sergio david sepulveda
@description: rutas de la aplicacion
@date: 2020-12-20
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Support\Facades\Route;

//controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;



Route::get('/', HomeController::class);

Route::resource('cursos', CursoController::class);
// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');
// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos', 'index')->name("cursos.index");
//     Route::get('cursos/create', 'create')->name("curso.create");
//     Route::post('cursos', 'store')->name("curso.store");
//     Route::get('cursos/{curso}', 'show')->name("curso.show");
//     Route::get('cursos/{curso}/edit', 'edit')->name("curso.edit");
//     Route::put('cursos/{curso}', 'update')->name("curso.update");
//     Route::delete('cursos/{curso}', 'destroy')->name("curso.destroy");
// });

