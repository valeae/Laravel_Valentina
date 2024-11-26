<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ControladorCliente;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/alumnos', [AlumnoController::class, 'index']);

//Clientes

Route::get('/clientes', [ControladorCliente::class, 'lista']); // Lista todos los clientes
Route::get('/clientes/{id}', [ControladorCliente::class, 'cliente']); // Obtiene un cliente específico
Route::post('/clientes', [ControladorCliente::class, 'crear']); // Crea un cliente
Route::put('/clientes/{id}', [ControladorCliente::class, 'actualizar']); // Actualiza un cliente
Route::delete('/clientes/{id}', [ControladorCliente::class, 'eliminar']); // Elimina un cliente

