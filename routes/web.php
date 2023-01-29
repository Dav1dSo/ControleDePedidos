<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreatePedido;
use App\Http\Controllers\RegisterPedidoController;
use App\Http\Controllers\ShowPedidosController;
use App\Http\Controllers\DeletePedidoController;
// Rotas
Route::get('/', [HomeController::class, 'Home']);
Route::get('/createPedido', [CreatePedido::class, 'CreatePedido']);
Route::post('/registerPedido', [RegisterPedidoController::class, 'RegisterPedido']);
Route::get('/showPedidos', [ShowPedidosController::class, 'ShowPedidos']);
Route::delete('/deletePedido/{id}', [DeletePedidoController::class, 'DeletePedido']);