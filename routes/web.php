<?php

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
    return view('welcome');
});

//alumno1
Route::get('/Alumno/alumno1', function () {
    return view('Alumno/alumno1');
});
//alumno2
Route::get('/Alumno/alumno2', function () {
    return view('Alumno/alumno2');
});
// ver cliente 
Route::get('/Cliente/show', [App\Http\Controllers\ClienteController::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
