@extends('layouts.main')

@section('welcome')
  <div class="col-lg-8 my-3 mx-auto">
    <h1 class="display-3 text-center">Pedidos por Estado!</h1>
        <p class="text-center lead">Seus pedidos estão listados por estado!</p>
  </div> 
@endsection

@section('PedidosUes')

<div id="registers" class=" col-lg-5 my-4 mx-auto alert alert-dark" role="alert">
    Foram encontrados {{ $ue }} registros no estado do {{$SelectUe}} !
</div>


<table id="table" class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Espera</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Rua</th>
            <th scope="col">Número</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Valor</th>
            <th scope="col">Data pedido</th>
            <th scope="col">Status</th>
            <th scope="col">Observação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($getParams as $getParam)
        <tr>
            <td scope="row">{{ $getParam->id}}º</td> 
            <td>{{ $getParam->nome }}</td>
            <td>{{ $getParam->telefone }}</td>
            <td>{{ $getParam->rua }}</td>
            <td>{{ $getParam->numero }}</td>
            <td>{{ $getParam->bairro }}</td>
            <td>{{ $getParam->cidade }}</td>
            <td>{{ $getParam->estado }}</td>
            <td>{{ $getParam->valor }}</td>
            <td> {{date('d/m/Y', strtotime($getParam->data_pedido))}} </td>
            <td>{{ $getParam->status }}</td>
            <td>{{ $getParam->observacao }}</td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection

