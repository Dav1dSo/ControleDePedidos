@extends('layouts.main')

@section('titleUltimosPedidos')
    <div class="col-lg-8 my-3 mx-auto">
        <h1 class="display-3 text-center">Pedidos dos últimos 6 meses</h1>
        <p class="text-center lead">Todos os pedidos anteriores a 6 meses estão listados a baixo!</p>
  </div>
@endsection

@section('select6meses')

        @foreach($nomes as $nome => $value)
            {{ $value }}
        @endforeach <!-- nome -->
        <br>
        @foreach($telefones as $telefone => $value)
            {{ $value }}
        @endforeach
        <br>
        @foreach($ruas as $rua => $value)
            {{ $value }}
        @endforeach
        <br>
        @foreach($numeros as $numero => $value)
            {{ $value }}
        @endforeach
        <br>
        @foreach($bairros as $bairro => $value)
            {{ $value }}
        @endforeach
        <br>
        @foreach($cidades as $cidade => $value)
            {{ $value }}
        @endforeach
        <br>
        @foreach($estados as $estado => $value)
            {{ $value }}
        @endforeach
        <br>
        @foreach($valores as $valor =>$value)
            {{ $value }} 
        @endforeach <!-- valor -->
        <br> 
        @foreach($data_pedidos as $pedidos => $value)
            {{ $value }}
        @endforeach
        <br>
        @foreach($status as $estate => $value)
            {{ $value }}
        @endforeach
        <br>
        @foreach($observacoes as $observacao => $value)
            {{ $value }}
        @endforeach

@endsection

<!-- Observação -->