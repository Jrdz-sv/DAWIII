<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ClienteController;

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
// ver Pedido 
Route::get('/Pedido/show', [PedidoController::class, 'index']);

//Crear Pedido (FrontEnd)
Route::get('/Pedido/create', [PedidoController::class, 'create']);

//Crear Pedido(BackEnd)
Route::post('/Pedido/store', [PedidoController::class, 'store']);

//Modificar Pedido (FrontEnd)
Route::get('/Pedido/edit/{pedido}', [PedidoController::class, 'edit']);

//Modificar Pedido (BackEnd)
Route::put('/Pedido/update/{pedido}', [PedidoController::class, 'update']);

//Eliminar Pedido(BackEnd)
Route::delete('/Pedido/destroy/{id}', [PedidoController::class, 'destroy']);

//Report Pedido
Route::get('/reports/Pedido', [ReportController::class, 'pedidoreport']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

