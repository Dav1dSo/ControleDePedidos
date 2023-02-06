<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
    <style>

        #display-font {
            font-size: 18px;
            color: white;
        }
        
        #display-font:hover{
            box-shadow: 2px 2px 20px 1px #696969;
            border-radius: 15px;
            border: none;
            font-size: 18.1px;
        }

        #endereco {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        main {
            margin-top: 40px;
        }


        #table{
            width: 82vw;
            margin: auto;
            box-shadow: 2px 2px 25px 2px #808080;
        }

        #table th {
            background-color: #1C1C1C;
            color: white; 
        }

        #btnactions{
            display: flex;
        }    

        #btnactions a{
            margin-right: 7px;
        }
        #errorMessage {
            margin-top: 5vh;
        }

        #Select select{
            margin: auto;
            max-width: 500px;
            box-shadow: 2px 10px 25px 2px #808080;
        }

        #Select button {
            margin-top: 5vh;
            margin-left: 30vw;
            display flex;
            text-align: center;
        }


</style>
<body>

    <div class=" bg-dark text-white d-flex flex-row-reverse bd-highlight">
    <div id="display-font" class="p-3 bd-highlight">
    <a class="dropdown-item" href="/createPedido">Criar pedidos</a>
    </div>
    <div id="display-font" class="p-3 bd-highlight"><a class="dropdown-item" href="/showPedidos">Ver pedidos</a></div>
    <li type="none" id="display-font" class="p-3 nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Filtrar pedidos</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/ultimosPedidos">Últimos 6 meses</a>
            <a class="dropdown-item" href="/selectPedidoUes">Pedidos por estado</a>
            <a class="dropdown-item" href="/pedidosAbertos">Pedidos abertos</a>
            <a class="dropdown-item" href="/pedidosFechados">Pedidos fechados</a>
        </div>
    </li>
    </div>
    
    @yield('errorMensages')

    <main>
        @if(session('msgUpdate'))
            <div class=" mb-3 w-50 mx-auto alert alert-success">
                {{ session('msgUpdate') }}
            </div>
        @endif
    </main>
  
    <main>
        @if(session('msgDelete'))
            <div class="mb-3 w-50 mx-auto alert alert-warning">
                {{ session('msgDelete') }}
            </div>
        @endif
    <main>

    <main>
        @if(session('msg'))   
            <div class="mb-3 w-50 mx-auto alert alert-success" role="alert">
                {{ session('msg') }}
            </div>
        @endif
    </main> 

    @yield('welcome')
    @yield('createpedido')
    @yield('showPedidos')
    @yield('titleUltimosPedidos')
    @yield('select6meses')
    @yield('PedidosUes')
    @yield('PedidosAbertos')
    @yield('count')

</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
