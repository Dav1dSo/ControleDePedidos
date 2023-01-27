@extends('layouts.main')

@section('navbar')
    
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>

        <div class="col-lg-8 my-3">
            <h1 class="display-3 text-center">Controle de pedido</h1>
            <p class="text-center lead">Crie seus pedidos a baixo!</p>
        </div> 

        <form action="/createPedido" method="POST">
            <div class="mb-3 w-50 mx-auto">
              <label for="exampleInputNome1" class="form-label">Nome</label>
              <input name="nome" type="text" class="form-control" id="exampleInputText1" aria-describedby="TextHelp">    
            </div>
            <div class="mb-3 w-50 mx-auto">
              <label for="exampleInputTelefone1" class="form-label">Telefone</label>
              <input name="telefone" type="number" class="form-control" id="exampleInputNumber1">
            </div>
            <div class="mb-3 w-50 mx-auto">
              <label for="exampleInputLocal" class="form-label">Endereço</label>
              <input name="local" type="text" class="form-control" id="exampleInputText1">
            </div>
            <div class="mb-3 w-50 mx-auto">
              <label for="exampleInputValor" class="form-label">Valor</label>
              <input placeholder="R$:" name="valor_pedido" type="number" class="form-control" id="exampleInputNumber1">
            </div>
            <div class="mb-3 w-50 mx-auto">
              <label for="exampleInputDate" class="form-label">Data do pedido</label>
              <input name="data_pedido" type="date" class="form-control" id="exampleInputDate1">
            </div>
            <div class="md-3 w-50 mx-auto">
                <label for="exampleInputStatus" class="form-label">Status</label>
                <select class="md-3 w-51 form-select" aria-label="Default select example">
                    <option value="1">Fechado</option>
                    <option value="2">Aberto</option>
                </select>
            </div>
            <div class="m-4 d-grid gap-2 col-1 mx-auto">
                <input type="submit" class="btn btn-primary" type="button"> 
            </div>
        </form>

        <div class="col-lg-2"></div>
    </div>
</div>

@endsection