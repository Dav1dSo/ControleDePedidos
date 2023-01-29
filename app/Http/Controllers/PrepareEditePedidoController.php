<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;

class PrepareEditePedidoController extends Controller
{
    public function PrepareEditePedido($id) {
        
        $pedido = Pedidos::findOrFail($id);

        return view('EditePedido', ['pedido' => $pedido]);
    }
}
