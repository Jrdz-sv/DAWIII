<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('/auth/login');
})->middleware('auth');

//alumno1
Route::get('/Alumno/alumno1', function () {
    return view('Alumno/alumno1');
})->middleware('auth');
//alumno2
Route::get('/Alumno/alumno2', function () {
    return view('Alumno/alumno2');
})->middleware('auth');

// -------------------RUTAS PARA CRUD TABLA CLIENTE ----------------

// ver cliente 
Route::get('/Cliente/show', [App\Http\Controllers\ClienteController::class, 'index']);

//Ruta para Crear Cliente (FrontEnd)
Route::get('/Cliente/create', [ClienteController::class, 'create']);

//Crear Cliente (BackEnd)
Route::post('/Cliente/store', [ClienteController::class, 'store']);

//Modificar Cliente (FrontEnd)
Route::get('/Cliente/edit/{client}', [ClienteController::class, 'edit']);

//odificar Cliente (BackEnd)
Route::put('/Cliente/update/{client}', [ClienteController::class, 'update']);

//Eliminar Producto (BackEnd)
Route::delete('/Cliente/destroy/{id}', [ClienteController::class, 'destroy']);


// -------------------RUTAS PARA CRUD TABLA PEDIDOS ----------------
// ver cliente 
Route::get('/Pedido/show', [App\Http\Controllers\PedidoController::class, 'index']);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
