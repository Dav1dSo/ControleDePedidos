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

        $ultimosMeses = DB::table('pedidos')
        ->selectRaw(' * ')->whereBetween('data_pedido', [$dataInicio, $datenow] )->get();

        $getParms = $ultimosMeses;

        // Seleciona atributos
        $getValuesId = $getParms->pluck('id');
        $getValuesNome = $getParms->pluck('nome');
        $getValuesTelefone = $getParms->pluck('telefone');
        $getValuesRua = $getParms->pluck('rua');
        $getValuesNumero = $getParms->pluck('numero');
        $getValuesBairro = $getParms->pluck('bairro');
        $getValuesCidade = $getParms->pluck('cidade');
        $getValuesEstado = $getParms->pluck('estado');
        $getValuesValor = $getParms->pluck('valor');
        $getValuesData_Pedido = $getParms->pluck('data_pedido');
        $getValuesStatus = $getParms->pluck('status');
        $getValuesObservacao = $getParms->pluck('observacao');

        // Seleciona valores dos atributos
        $ids = $getValuesId;
        $nomes = $getValuesNome;
        $telefones = $getValuesTelefone;
        $ruas = $getValuesRua;
        $numeros = $getValuesNumero;
        $bairros = $getValuesBairro;
        $valores = $getValuesValor;
        $cidades = $getValuesCidade;
        $estados = $getValuesEstado;
        $data_pedidos = $getValuesData_Pedido;
        $status = $getValuesStatus;
        $observacoes = $getValuesObservacao;
        
        return view('teste2', 
        [
            'ids' => $ids,
            'nomes' => $nomes, 
            'telefones' => $telefones,
            'ruas' => $ruas,
            'numeros' => $numeros,
            'valores' => $valores,
            'bairros' => $bairros,
            'cidades' => $cidades,
            'estados' => $estados,
            'data_pedidos' => $data_pedidos,
            'status' => $status,
            'observacoes' => $observacoes,
            'props' => $getParms
        
        ]);    
    }  
}  
