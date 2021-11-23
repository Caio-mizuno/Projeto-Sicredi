@extends('layouts.main')

@section('title','List_Clients')

@section('content')
<section class="section">

    @if ($allClient->isNotEmpty())
    <!-- Print each users -->
    <div class="section__title">Lista de Clientes</div>
    <div class="quadro-userlist">
        <div class=" list-header">
            <div  class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Id</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Nome</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">CPF</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">CNH</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Endereço</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Cartão Cred.</div>
        </div>
        @foreach ($allClient as $c)
            @if ($c->id % 2 != 0)
            <div class="list-body">
                <div class="list-cell">{{$c['id']}}</div>
                <div class="list-cell">{{$c['nome']}}</div>
                <div class="list-cell">{{$c['cpf']}}</div>
                <div class="list-cell">{{$c['cnh']}}</div>
                <div class="list-cell">{{$c['endereco']}}</div>
                <div class="list-cell">{{$c['cartao']}}</div>
            </div>
            @else  
            <div class="list-body">
                <div class="list-cell">{{$c['id']}}</div>
                <div class="list-cell">{{$c['nome']}}</div>
                <div class="list-cell">{{$c['cpf']}}</div>
                <div class="list-cell">{{$c['cnh']}}</div>
                <div class="list-cell">{{$c['endereco']}}</div>
                <div class="list-cell">{{$c['cartao']}}</div>
            </div>  
            @endif


        @endforeach
    </div>

    @else
    <h1 class="section__title">É necessário realizar um cadastro.</h1>
    <span class="section__subtitle">Lista de Clientes está vazia!</span>
    <script>
        window.alert('Não há cadastros!')
    </script>

    @endif


</section>
@endsection

