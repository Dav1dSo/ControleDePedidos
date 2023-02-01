<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;

class DeletePedidoController extends Controller
{
    public function Deletepedido($id) {

        Pedidos::findOrFail($id)->delete();

        return redirect('/')->with('msgDelete', 'Pedido deletado com sucesso!');
    }
}
 