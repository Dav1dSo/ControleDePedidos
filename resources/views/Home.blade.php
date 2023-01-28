@extends('layouts.main')

@section('navbar')
<div class=" bg-dark text-white d-flex flex-row-reverse bd-highlight">
  <div id="display-font" class="p-3 bd-highlight">
  <a class="dropdown-item" href="/createPedido">Criar pedidos</a>
  </div>
  <div id="display-font" class="p-3 bd-highlight">Ver pedidos</div>
  <li type="none" id="display-font" class="p-3 nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Filtrar pedidos</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Últimos 6 meses</a>
        <a class="dropdown-item" href="#">Pedidos com observação</a>
        <a class="dropdown-item" href="#">Pedidos abertos</a>
        <a class="dropdown-item" href="#">Pedidos fechados</a>
      </div>
  </li>
</div>
@endsection

@section('welcome')
  <div class="col-lg-8 my-3 mx-auto">
    <h1 class="display-3 text-center">Controle de pedidos</h1>
        <p class="text-center lead">Crie seus pedidos a baixo!</p>
  </div> 
@endsection