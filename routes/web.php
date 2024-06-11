<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicoController;
use App\Models\Medico;
//Ruta Index
Route::get('/', [HomeController::class, 'index']);

//Ruta READ ALL Medicos
Route::get('/medicos', [MedicoController::class, 'index']);
//Ruta READ Registro Medico
Route::get('/medicos/{id}', [MedicoController::class, 'show']);
//Ruta READ ALL(JSON)
Route::get('/medicos/list', [MedicoController::class, 'list']);

//Ruta form new Medico
Route::get('/medicos/create', [MedicoController::class, 'create']);
//Ruta CREATE Metodo POST, Guardar Nuevos Registros Medicos
Route::post('/medicos/create', [MedicoController::class, 'store']);

//Ruta UPDATE
Route::get('/medicos/{id}/edit', [MedicoController::class, 'edit']);
//Ruta UPDATE Metodo POST, Modificar Registros Medicos Existentes
Route::put('/medicos/{id}/edit', [MedicoController::class, 'update']);

//Ruta DELETE
Route::put('/medicos/{id}/delete', [MedicoController::class, 'delete']);
