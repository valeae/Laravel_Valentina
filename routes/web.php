<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCliente;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/clientes', function () {
//     return '<h1> Nueva Ruta Clientes<h1>';
// });

// Route::get('/clientes', [ControladorCliente::class, 'control']);

// Route::get('clientes/{id}', function ($id) {
//     return 'Mi identificacion es: '.$id;
// });

// Ruta para mostrar la identificación
// Route::get('/clientes/{id}', [ControladorCliente::class, 'cedula']);

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar el listado de clientes
Route::get('/clientes', [ControladorCliente::class, 'control']);

// Ruta para mostrar los detalles del cliente
Route::get('/clientes/details/{id}', [ControladorCliente::class, 'details']);

