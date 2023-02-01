@extends('layouts.main')

@section('welcome')
<div class="col-lg-8 my-3 mx-auto">
    <h1 class="display-3 text-center">Pedidos Abertos!</h1>
    <p class="text-center lead">Seus pedidos abertos serão listados a baixo!</p>
</div>
@endsection

@section('PedidosAbertos')
    <div id="registers" class=" col-lg-5 my-4 mx-auto alert alert-dark" role="alert">
        Foram encontrados {{ $ue }} registros em aberto !
    </div> 

    @if($ue > 0)
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
                @foreach($getPA as $getPab)
                <tr>
                    <td scope="row">{{ $getPab->id}}º</td> 
                    <td>{{ $getPab->nome }}</td>
                    <td>{{ $getPab->telefone }}</td>
                    <td>{{ $getPab->rua }}</td>
                    <td>{{ $getPab->numero }}</td>
                    <td>{{ $getPab->bairro }}</td>
                    <td>{{ $getPab->cidade }}</td>
                    <td>{{ $getPab->estado }}</td>
                    <td>{{ $getPab->valor }}</td>
                    <td> {{date('d/m/Y', strtotime($getPab->data_pedido))}} </td>
                    <td>{{ $getPab->status }}</td>
                    <td>{{ $getPab->observacao }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection 