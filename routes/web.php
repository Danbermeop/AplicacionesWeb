<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\EstudiantesController;



Route::get('/', function () {
    return view("welcome");
});

Route::get('/mostrar', [NotasController::class, 'index']);
Route::get('/crear', [NotasController::class, 'crear']);
Route::get('/editar', [NotasController::class, 'editar']);
Route::get('/eliminar', [NotasController::class, 'eliminar']);

Route::get('Materias/index', [MateriasController::class, 'index']);
Route::get('Materias/mostrar', [MateriasController::class, 'mostrar']);
Route::get('/materias/editar', [MateriasController::class, 'editar']);
Route::get('Materias/eliminar', [MateriasController::class, 'eliminar']);




Route::get('estudiantes/index', [EstudiantesController::class, 'index']);
Route::get('estudiantes/crear', [EstudiantesController::class, 'crear']);
Route::get('estudiantes/editar', [EstudiantesController::class, 'editar']);
Route::get('estudiantes/eliminar', [EstudiantesController::class, 'eliminar']);
Route::get('estudiantes/mostrar', [EstudiantesController::class, 'mostrar']);
