@extends('layouts.main')

@section('welcome')
    <div class="col-lg-8 my-3 mx-auto">
        <h1 class="display-3 text-center">Pedidos por Estado!</h1>
        <p class="text-center lead">Selecione o estado desejado!</p>

    <div class="form-floating">
        <form id="Select" action="/pedidoUes">
            <select name="Ue" class=" form-select" id="floatingSelect" aria-label="Floating label select example">
                <option value="AC" >Acre</option>
                <option value="AL" >Alagoas</option>
                <option value="AP" >Amapá</option>
                <option value="AM" >Amazonas</option>
                <option value="BA" >Bahia</option>
                <option value="CE" >Ceará</option>
                <option value="DF" >Brasilia</option>
                <option value="ES" >Espítio Santo</option>
                <option value="GO" >Goiás</option>
                <option value="MA" >Maranhão</option>
                <option value="MT" >Mato Grosso</option> 
                <option value="MS" >Mato Grosso do Sul</option>
                <option value="MG" >Minas Gerais</option>
                <option value="PA" >Pará</option>
                <option value="PB" >Paraiba</option>
                <option value="PR" >Paraná</option>
                <option value="PE" >Pernambuco</option>
                <option value="PI" >Piauí</option>
                <option value="RJ" >Rio de Janeiro</option>
                <option value="RN" >Rio Grande do Norte</option>
                <option value="RS" >Rio Grande do Sul</option>
                <option value="RO" >Rondonia</option>
                <option value="RR" >Roraima</option>
                <option value="SC" >Santa Catarina</option>
                <option value="SP" >São Paulo</option>
                <option value="SE" >Sergipe</option>
                <option value="TO" >Tocantins</option>
            </select>
                <button class="btn btn-primary">Enviar</button>
    </div>
    </div>
    </div> 
@endsection