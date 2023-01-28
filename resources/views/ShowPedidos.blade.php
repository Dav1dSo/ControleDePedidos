@extends('layouts.main')

@section('showPedidos')

@section('welcome')
  <div class="col-lg-8 my-3 mx-auto">
    <h1 class="display-3 text-center">Controle de pedidos</h1>
        <p class="text-center lead">Seus pedidos estão listados a baixo!</p>
  </div> 
@endsection

<table id="table" class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Rua</th>
            <th scope="col">Numero</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Valor</th>
            <th scope="col">Data pedido</th>
            <th scope="col">Status</th>
            <th scope="col">Observação</th>
        </tr>
    </thead>
    @foreach($pedidos as $pedido)
  <tbody>
    <tr>
      <th scope="row">{{ $pedido->id }}</th>
      <td> {{$pedido->nome}} </td>
      <td> {{$pedido->telefone}} </td>
      <td> {{$pedido->rua}} </td>
      <td> {{$pedido->numero}} </td>
      <td> {{$pedido->bairro}} </td>
      <td> {{$pedido->cidade}} </td>
      <td> {{$pedido->estado}} </td>
      <td> {{$pedido->valor}} </td>
      <td> {{$pedido->data_pedido}} </td>
      <td> {{$pedido->status}} </td>
      <td> {{$pedido->observacao}} </td>
    </tr>
  </tbody>
  @endforeach
</table>

<div class=" col-lg-6 my-4 mx-auto alert alert-info" role="alert">
    Foram encontrados {{ $quantidade }} registros!
</div>

@endsection 