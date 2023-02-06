<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

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

        for($i=0; $i < count($ultimosMeses); $i++){
            $i = $i;
        }

        $getParms = $ultimosMeses;
        
        return view('UltimosPedidos', ['props' => $getParms, 'count' => $i]);    
    }  
}  
 