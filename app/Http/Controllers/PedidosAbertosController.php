<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class PedidosAbertosController extends Controller
{
    public function PedidosAbertos() {

        $PedidosAbertos = DB::table('pedidos')->where('status', '=', 'aberto' )->get();

        for($ue = 0; $ue<count($PedidosAbertos); $ue++){
            $ue = $ue;
        }

        $getPA = $PedidosAbertos;

        return view('PedidosAbertos', ['getPA' => $getPA, 'ue' => $ue]);

    }
} 
