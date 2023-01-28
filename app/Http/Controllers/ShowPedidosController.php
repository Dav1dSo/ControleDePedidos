<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;

class ShowPedidosController extends Controller
{
    public function ShowPedidos() {
        $pedidos = Pedidos::all();

        for($i=0; $i < count($pedidos); $i++){
            $i = $i;
        }


        return view('ShowPedidos', ['pedidos' => $pedidos], ['quantidade' => $i])->with('msgRegisters', 'Foram econtrados {$i}!');
    }
}
