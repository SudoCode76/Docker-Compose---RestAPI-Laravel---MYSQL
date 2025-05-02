<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\PartidosController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('productos', [ProductosController::class, 'index']);
Route::post('productos', [ProductosController::class, 'store']);
Route::get('productos/{id}', [ProductosController::class, 'show']);
Route::put('productos/{id}', [ProductosController::class, 'update']);
Route::delete('productos/{id}', [ProductosController::class, 'destroy']);



Route::get('equipos', [EquiposController::class, 'index']);
Route::post('equipos', [EquiposController::class, 'store']);
Route::get('equipos/{id}', [EquiposController::class, 'show']);
Route::put('equipos/{id}', [EquiposController::class, 'update']);
Route::delete('equipos/{id}', [EquiposController::class, 'destroy']);


Route::get('jugadores', [JugadoresController::class, 'index']);
Route::post('jugadores', [JugadoresController::class, 'store']);
Route::get('jugadores/{id}', [JugadoresController::class, 'show']);
Route::put('jugadores/{id}', [JugadoresController::class, 'update']);
Route::delete('jugadores/{id}', [JugadoresController::class, 'destroy']);


Route::get('partidos', [PartidosController::class, 'index']);
Route::post('partidos', [PartidosController::class, 'store']);
Route::get('partidos/{id}', [PartidosController::class, 'show']);
Route::put('partidos/{id}', [PartidosController::class, 'update']);
Route::delete('partidos/{id}', [PartidosController::class, 'destroy']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
