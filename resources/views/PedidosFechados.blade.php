@extends('layouts.main')

@section('welcome')
<div class="col-lg-8 my-3 mx-auto">
    <h1 class="display-3 text-center">Pedidos Fechados!</h1>
    <p class="text-center lead">Seus pedidos fechados serão listados a baixo!</p>
</div>
@endsection

@section('PedidosAbertos')
    <div id="registers" class=" col-lg-5 my-4 mx-auto alert alert-dark" role="alert">
        Foram encontrados {{ $ue }} registros fechados !
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
                @foreach($getPF as $getPf)
                <tr>
                    <td scope="row">{{ $getPf->id}}º</td> 
                    <td>{{ $getPf->nome }}</td>
                    <td>{{ $getPf->telefone }}</td>
                    <td>{{ $getPf->rua }}</td>
                    <td>{{ $getPf->numero }}</td>
                    <td>{{ $getPf->bairro }}</td>
                    <td>{{ $getPf->cidade }}</td>
                    <td>{{ $getPf->estado }}</td>
                    <td>{{ $getPf->valor }}</td>
                    <td> {{date('d/m/Y', strtotime($getPf->data_pedido))}} </td>
                    <td>{{ $getPf->status }}</td>
                    <td>{{ $getPf->observacao }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection 