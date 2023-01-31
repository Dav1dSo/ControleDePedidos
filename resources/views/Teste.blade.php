@extends('layouts.main')

@section('titleUltimosPedidos')
    <div class="col-lg-8 my-3 mx-auto">
        <h1 class="display-3 text-center">Pedidos dos últimos 6 meses</h1>
        <p class="text-center lead">Todos os pedidos anteriores a 6 meses estão listados a baixo!</p>
  </div>
@endsection


@section('select6meses')
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
        <tr>
        @foreach($ids as $id => $value)
            <td scope="row">{{ $value }}º</td> 
        @endforeach  
        @foreach($nomes as $nome => $value)
            <td>{{ $value }}</td>
        @endforeach   <!-- nomes -->
        @foreach($telefones as $telefone => $value)
            <td>{{ $value }}</td>
        @endforeach   <!-- telefones -->
        @foreach($ruas as $rua => $value)
            <td>{{ $value }}</td>
        @endforeach   <!-- ruas -->
        @foreach($numeros as $numero => $value)
            <td>{{ $value }}</td>
        @endforeach   <!-- numero -->
        @foreach($bairros as $bairro => $value)
            <td>{{ $value }}</td>
        @endforeach   <!-- bairros -->
        @foreach($cidades as $cidade => $value)
            <td>{{ $value }}</td>
        @endforeach   <!-- cidade -->
        @foreach($estados as $estado => $value)
            <td>{{ $value }}</td>
        @endforeach   <!-- status -->
        @foreach($valores as $valor => $value)
            <td>{{ $value }}</td>
        @endforeach   <!-- valor -->
        @foreach($data_pedidos as $pedidos => $value)
            <td>{{date('d/m/Y', strtotime($value))}}</td>
        @endforeach   <!-- data_pedido -->
        @foreach($status as $estate => $value)
            <td>{{ $value }}</td>
        @endforeach   <!-- status -->
        @foreach($observacoes as $observacao => $value)
            <td>{{ $value }}</td>
        @endforeach   <!-- observacoes -->
    </tr>
    </tbody>
</table>

@endsection