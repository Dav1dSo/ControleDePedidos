<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pedidos;

class PedidosUesController extends Controller
{
    public function UesPedidos(Request $request) {

        $SelectUe = $request->Ue;

        $PedidosUes = DB::table('pedidos')->where('estado', '=', $SelectUe )->get();

        for($ue = 0; $ue<count($PedidosUes); $ue++){
            $ue = $ue;
        }

        $getParms = $PedidosUes;

        return view('UesPedidos', ['getParams' => $getParms, 'SelectUe' => $SelectUe, 'ue' => $ue])->with('msgSelectUe', 'Foram encontrados {$ue} no estado de {$SelectUe}!');

    }
}
