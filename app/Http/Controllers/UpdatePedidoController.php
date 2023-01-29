<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;

class UpdatePedidoController extends Controller
{
    public function UpdatePedido(Request $request) {
        
        Pedidos::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msgUpdate', 'Evento editado com sucesso!');

    }
}
