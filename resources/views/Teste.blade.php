@extends('layouts.main')

@section('titleUltimosPedidos')
    <div class="col-lg-8 my-3 mx-auto">
        <h1 class="display-3 text-center">Pedidos dos últimos 6 meses</h1>
        <p class="text-center lead">Todos os pedidos anteriores a 6 meses estão listados a baixo!</p>
  </div>
@endsection


@section('select6meses')

<table id="table2" class="table table-bordered">
      <!-- <thead class="thead-dark">
      <tr>
         <th>Espera</th>
         <th>Nome</th>
         <th>Telefone</th>
         <th>Rua</th>
         <th>Número</th>
         <th>Bairro</th>
         <th>Cidade</th>
         <th>Estado</th>
         <th>Valor</th>
         <th>Data pedido</th>
         <th>Status</th>
         <th>Observação</th>
      </tr>
      </thead> -->
      <tbody>
      </tbody>
      <tbody>
      @foreach($nomes as $nome)
      <tr>
        <th>Nome:</th>
        <td>{{ $nome }}</td>
      </tr>
      @endforeach <!-- nome -->
      </tbody>
      <tbody>
      @foreach($telefones as $telefone)
      <tr>
        <th>Telefone:</th>
         <td>{{ $telefone }}</td>
      </tr>
      @endforeach <!-- telefone -->
      </tbody>
      <tbody>
      @foreach($ruas as $rua)
      <tr> 
        <th>Rua:</th>
        <td>{{ $rua }}</td>
      </tr>
      @endforeach <!-- ruas -->
      </tbody>
      <tbody>
      @foreach($numeros as $numero)
      <tr>
        <th>Número:</th>
        <td>{{ $numero }}</td>
      </tr>
      @endforeach <!-- numero -->
      </tbody>
      <tbody>
      @foreach($bairros as $bairro)
      <tr>
        <th>Bairro:</th>
        <td>{{ $bairro}}</td>
      </tr>
      @endforeach <!-- bairro -->
      </tbody>
      <tbody>
      @foreach($cidades as $cidade)
      <tr>
        <th>Cidade:</th>
         <td>{{ $cidade}}</td>
      </tr>
      @endforeach <!-- cidade -->
      </tbody>
      <tbody>
      @foreach($estados as $estado)
      <tr>
        <th>Estado:</th>
         <td>{{ $estado}}</td>
      </tr>
      @endforeach <!-- estado -->
      </tbody>
      <tbody>
      @foreach($valores as $valor)
      <tr>
        <th>Valor:</th>
        <td>{{ $valor}}</td>
      </tr>
      @endforeach <!-- valor -->
      </tbody>
      <tbody>
      @foreach($data_pedidos as $data_pedido)
      <tr>
        <th>Data:</th>
        <td>{{date('d/m/Y', strtotime($data_pedido))}}</td>
      </tr>
      @endforeach <!-- data pedido -->
      </tbody>
      <tbody>
      @foreach($status as $state)
      <tr>
        <th>Status:</th>
         <td>{{ $state}}</td>
      </tr>
      @endforeach <!-- status -->
      </tbody>
      <tbody>
      @foreach($observacoes as $observacao)
      <tr>
        <th>Observação:</th>
         <td>{{ $observacao}}</td>
      </tr>
      @endforeach <!-- observacao -->
      </tbody>
</table>

@endsection