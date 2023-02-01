<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidosFechadosController extends Controller
{
    public function PedidosFechados() {

        $PedidosFechados = DB::table('pedidos')->where('status', '=', 'fechado' )->get();

        for($ue = 0; $ue<count($PedidosFechados); $ue++){
            $ue = $ue;
        }

        $getPF = $PedidosFechados;

        return view('PedidosFechados', ['getPF' => $getPF, 'ue' => $ue]);

    }
}
 