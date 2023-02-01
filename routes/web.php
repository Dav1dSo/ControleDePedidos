<?php

use Illuminate\Support\Facades\Route;

// importações de controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreatePedido;
use App\Http\Controllers\RegisterPedidoController;
use App\Http\Controllers\ShowPedidosController;
use App\Http\Controllers\DeletePedidoController;
use App\Http\Controllers\PrepareEditePedidoController;
use App\Http\Controllers\UpdatePedidoController;
use App\Http\Controllers\UltimosPedidosController;
use App\Http\Controllers\PedidosUesController;
use App\Http\Controllers\SelectUeController;

// Rotas
Route::get('/', [HomeController::class, 'Home']);
Route::get('/createPedido', [CreatePedido::class, 'CreatePedido']);
Route::post('/registerPedido', [RegisterPedidoController::class, 'RegisterPedido']);
Route::get('/showPedidos', [ShowPedidosController::class, 'ShowPedidos']);
Route::delete('/deletePedido/{id}', [DeletePedidoController::class, 'DeletePedido']);
Route::get('/editePedido/{id}', [PrepareEditePedidoController::class, 'PrepareEditePedido']);
Route::put('/updatePedido/{id}', [UpdatePedidoController::class, 'Updatepedido']);
//Rotas select

Route::get('/selectPedidoUes', [SelectUeController::class, 'SelectUePedido']);
Route::get('/pedidoUes', [PedidosUesController::class, 'UesPedidos']);
Route::get('/ultimosPedidos', [UltimosPedidosController::class, 'UltimosPedidos']);