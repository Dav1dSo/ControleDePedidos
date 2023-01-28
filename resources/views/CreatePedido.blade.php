@extends('layouts.main')

@section('createpedido')

@section('errorMensages')
  @if($errors->any())
    <div  class="mb-3 w-50 mx-auto alert alert-danger" role="alert">
      <ul>
          @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
          @endforeach
      </ul>
    </div>
  @endif
@endsection

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>

        <div class="col-lg-8 my-3">
            <h1 class="display-3 text-center">Controle de pedidos</h1>
            <p class="text-center lead">Crie seus pedidos a baixo!</p>
        </div> 

        <form action="/registerPedido" method="POST">
          @csrf
            <div class="mb-3 w-50 mx-auto">
              <label for="exampleInputNome1" class="form-label">Nome</label>
              <input name="nome" type="text" class="form-control" id="exampleInputText1" aria-describedby="TextHelp">   
            </div>
            <div class="mb-3 w-50 mx-auto">
              <label for="exampleInputTelefone1" class="form-label">Telefone</label>
              <input name="telefone" type="number" class="form-control" id="inputTelefone1">
            </div>
            
            <div class="form-row " id="endereco">
                <div class="form-group col-md-2 ">
                  <label for="inputRua">Rua:</label>
                  <input name="rua" type="text" class="form-control" id="inputRua">
                </div>
                <div class="form-group col-md-2 ">
                  <label for="inputCity">Cidade:</label>
                  <input name="cidade" type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-1">
                  <label for="inputEstado">UF:</label>
                  <select name="estado" id="inputEstado" class="form-control">
                    <option>PB</option>
                    <option>PE</option>
                    <option>RN</option>
                    <option>DF</option>
                    <option>SP</option>
                    <option>SC</option>
                    <option>MS</option>
                    <option>AM</option>
                  </select>
                </div>
                <div class="form-group col-md-1 ">
                  <label for="inputNumber">Número:</label>
                  <input name="numero" type="number" class="form-control" id="inputNumber">
                </div>
            </div>

            <div class=" mb-3 w-50 mx-auto form-group col-md-2 ">
                <label for="inputCity">Bairro:</label>
                <input name="bairro" type="text" class="form-control" id="inputBairro">
              </div>

            <div class="mb-3 w-50 mx-auto">
              <label for="exampleInputValor" class="form-label">Valor</label>
              <input placeholder="R$:" name="valor" type="number" class="form-control" id="exampleInputNumber1">
            </div>
            <div class="mb-3 w-50 mx-auto">
              <label for="exampleInputDate" class="form-label">Data do pedido</label>
              <input name="data_pedido" type="date" class="form-control" id="exampleInputDate1">
            </div>
            <div class="md-3 w-50 mx-auto">
                <label for="exampleInputStatus" class="form-label">Status</label>
                <select name="status" class="md-3 w-51 form-select" aria-label="Default select example">
                    <option value="0">Fechado</option>
                    <option value="1">Aberto</option>
                </select>
            </div>
            <div class="md-3 m-4 w-50 mx-auto" >
              <textarea name="observacao" class="form-control" placeholder="Observações do pedido"></textarea>
            </div>
            <div class="m-4 d-grid gap-2 col-1 mx-auto">
                <input type="submit" class="btn btn-primary" type="button"> 
            </div>
        </form>

        <div class="col-lg-2"></div>
    </div>
</div>

@endsection
