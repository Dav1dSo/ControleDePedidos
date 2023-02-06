@extends('layouts.main')

@section('titleUltimosPedidos')
    <div class="col-lg-8 my-3 mx-auto">
        <h1 class="display-3 text-center">Pedidos dos últimos 6 meses</h1>
        <p class="text-center lead">Todos os pedidos anteriores a 6 meses estão listados a baixo!</p>
  </div>
@endsection

@section('count')
<div id="registers" class=" col-lg-5 my-4 mx-auto alert alert-dark" role="alert">
    Foram encontrados {{ $count }} registros!
</div>
@endsection

@section('select6meses')
@if($count > 0)
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
        @foreach($props as $prop)
        <tr>
            <td scope="row">{{ $prop->id}}º</td> 
            <td>{{ $prop->nome }}</td>
            <td>{{ $prop->telefone }}</td>
            <td>{{ $prop->rua }}</td>
            <td>{{ $prop->numero }}</td>
            <td>{{ $prop->bairro }}</td>
            <td>{{ $prop->cidade }}</td>
            <td>{{ $prop->estado }}</td>
            <td>{{ $prop->valor }}</td>
            <td> {{date('d/m/Y', strtotime($prop->data_pedido))}} </td>
            <td>{{ $prop->status }}</td>
            <td>{{ $prop->observacao }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endif
@endsection    