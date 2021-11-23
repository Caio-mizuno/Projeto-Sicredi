@extends('layouts.main')

@section('title','List_Categories')

@section('content')
<section class="section">

    @if ($allCategory->isNotEmpty())
    <!-- Print each users -->
    <div class="section__title">Lista de Categorias</div>
    <div class="quadro-userlist">
        <div class=" list-header">
            <div  class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Id</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Nome</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Valor</div>
        </div>
        @foreach ($allCategory as $v)
            @if ($v->id % 2 != 0)
            <div class="list-body">
                <div class="list-cell">{{$v['id']}}</div>
                <div class="list-cell">{{$v['nome']}}</div>
                <div class="list-cell">{{$v['valor']}}</div>
            </div>
            @else  
            <div class="list-body">
                <div class="list-cell">{{$v['id']}}</div>
                <div class="list-cell">{{$v['nome']}}</div>
                <div class="list-cell">{{$v['valor']}}</div>
            </div>  
            @endif


        @endforeach
    </div>

    @else
    <h1 class="section__title">É necessário realizar um cadastro.</h1>
    <span class="section__subtitle">Lista de Categorias está vazia!</span>
    <script>
        window.alert('Não há cadastros!')
    </script>

    @endif


</section>
@endsection

