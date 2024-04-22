<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\InscripcionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos', [AlumnoController::class, 'index']);
Route::get('/alumnos/crear', [AlumnoController::class, 'create']);
Route::post('/alumnos/crear', [AlumnoController::class, 'store']);
Route::get('/alumnos/ver/{id}', [AlumnoController::class, 'show']);
Route::get('/alumnos/editar/{id}', [AlumnoController::class, 'edit']);
Route::put('/alumnos/editar/{id}', [AlumnoController::class, 'update']);
Route::get('/alumnos/eliminar/{id}', [AlumnoController::class, 'destroy']);

// ---------- Materia

Route::get('/materia', [MateriaController::class, 'index']);
Route::get('/materia/crear', [MateriaController::class, 'create']);
Route::post('/materia/crear', [MateriaController::class, 'store']);
Route::get('/materia/ver/{id}', [MateriaController::class, 'show']);
Route::get('/materia/editar/{id}', [MateriaController::class, 'edit']);
Route::put('/materia/editar/{id}', [MateriaController::class, 'update']);
Route::get('/materia/eliminar/{id}', [MateriaController::class, 'destroy']);


// ---------- Inscripción
// Route::get('/inscripciones', [InscripcionController::class, 'index']);
Route::get('/inscripciones/crear', [InscripcionController::class, 'create']);
Route::post('/inscripciones/crear', [InscripcionController::class, 'store']);
// Route::get('/inscripciones/ver/{id}', [InscripcionController::class, 'show']);
Route::get('/inscripciones/editar/{id}', [InscripcionController::class, 'edit']);
Route::put('/inscripciones/editar/{id}', [InscripcionController::class, 'update']);
Route::get('/inscripciones/eliminar/{id}', [InscripcionController::class, 'destroy']);


