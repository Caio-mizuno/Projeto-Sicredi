@extends('layouts.main')

@section('title','List_Locadora')

@section('content')
<section class="section">

    @if ($allProduto->isNotEmpty())
    <!-- Print each users -->
    <div class="section__title">Histórico de pedidos de locações</div>
    <div class="quadro-userlist">
        <div class=" list-header">
        <div  class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Id</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Veículo</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Cliente</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Valor</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Inicio</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Final</div>
        </div>
        @foreach ($allProduto as $produto)
            @if ($produto->id % 2 != 0)
            <div class="list-body">
                <div class="list-cell">{{$produto['id']}}</div>
                <div class="list-cell">{{$produto['veiculo_id']}}</div>
                @foreach ($allClient as $c)
                    @if ($c->id == $produto['cliente_id'])
                    <div class="list-cell">{{$c['nome']}}</div>
                    @endif
                @endforeach
                <!-- <div class="list-cell">{{$produto['cliente_id']}}</div> -->
                <div class="list-cell">{{$produto['valor']}}</div>
                <div class="list-cell">{{$produto['inicio']}}</div>
                <div class="list-cell">{{$produto['final']}}</div>

            </div>
            @else  
            <div class="list-body" >
            <div class="list-cell">{{$produto['id']}}</div>
                <div class="list-cell">{{$produto['veiculo_id']}}</div>
                @foreach ($allClient as $c)
                    @if ($c->id == $produto['cliente_id'])
                    <div class="list-cell">{{$c['nome']}}</div>
                    @endif
                @endforeach
                <!-- <div class="list-cell">{{$produto['cliente_id']}}</div> -->
                <div class="list-cell">{{$produto['valor']}}</div>
                <div class="list-cell">{{$produto['inicio']}}</div>
                <div class="list-cell">{{$produto['final']}}</div>

            </div>  
            @endif


        @endforeach
    </div>

    @else
    <h1 class="section__title">É necessário realizar um cadastro.</h1>
    <span class="section__subtitle">Lista de produtos está vazia!</span>
    <script>
        window.alert('Não há cadastros!')
    </script>

    @endif


</section>
@endsection

