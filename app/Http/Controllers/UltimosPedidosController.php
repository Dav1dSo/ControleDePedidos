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

        // $ultimosMeses = DB::table('pedidos')
        // ->selectRaw(
        //     'created_at, nome, telefone, rua, cidade, estado, numero, bairro, valor, data_pedido, status, observacao '
        // )->whereBetween('data_pedido', [$dataInicio, $datenow] )->get();

        $ultimosMeses = DB::table('pedidos')
        ->selectRaw(' nome ')->whereBetween('data_pedido', [$dataInicio, $datenow] )->get();

        $teste = $ultimosMeses;

        $nome = $teste->pluck('nome');
        
        return view('UltimosPedidos', ['ultimosMeses' => $ultimosMeses, 'nome' => $nome]);
    }
}  
