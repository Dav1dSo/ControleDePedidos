<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;
use Illuminate\Support\Arr;

class UltimosPedidosController extends Controller
{
    public function UltimosPedidos() {

        // Seleciona data atual
        $datenow = \Carbon\Carbon::now();

        // 6 meses atras
        $dataInicio = Carbon::now()->sub('6 months');

        // Filtro por data 
        $ultimosMeses = DB::table('pedidos')
        ->selectRaw(' * ')->whereBetween('data_pedido', [$dataInicio, $datenow] )->get();

        $getParms = $ultimosMeses;
        
        return view('UltimosPedidos', ['props' => $getParms]);    
    }  
}  
