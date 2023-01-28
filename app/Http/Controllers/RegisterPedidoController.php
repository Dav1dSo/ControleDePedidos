<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedidos;

class RegisterPedidoController extends Controller
{
    public function registerPedido(Request $request) {
        
        $pedido = new Pedidos;

        //captura dos dados do formulario
        $pedido->nome = $request->nome;
        $pedido->telefone = $request->telefone;
        $pedido->rua = $request->rua;
        $pedido->cidade = $request->cidade;
        $pedido->estado = $request->estado;
        $pedido->numero = $request->numero;
        $pedido->bairro = $request->bairro;
        $pedido->valor = $request->valor;
        $pedido->data_pedido = $request->data_pedido;
        $pedido->status = $request->status;
        $pedido->observacao = $request->observacao;

        //salva dados de formulários
        $pedido->save();

        //redieciona usuário
        return redirect('/')->with('msg', 'Pedido cadastrado com sucesso!');
    }
}
