@extends('layouts.main')

@section('title','List_Locadora')

@section('content')
<section class="section">

    @if ($allVehicle->isNotEmpty())
    <!-- Print each users -->
    <div class="section__title">Lista de Veículos</div>
    <div class="quadro-userlist">
        <div class=" list-header">
            <div  class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Id</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Categoria</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Placa</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Modelo</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Fabricante</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Cor</div>
            <div class=" list-cell" style="background-color: rgb(94 135 185 / 58%);">Ano</div>
        </div>
        @foreach ($allVehicle as $v)
            @if ($v->id % 2 != 0)
            <div class="list-body">
                <div class="list-cell">{{$v['id']}}</div>
                <div class="list-cell">{{$v['category_nome']}}</div>
                <div class="list-cell">{{$v['placa']}}</div>
                <div class="list-cell">{{$v['modelo']}}</div>
                <div class="list-cell">{{$v['fabricante']}}</div>
                <div class="list-cell"><div style="width:50%;height:20px;margin-left: 27px;margin-top: 3px;padding: 0 2rem;border:2px double black; background:<?php echo $v->cor;?>"></div></div>
                
                <div class="list-cell">{{$v['ano']}}</div>
            </div>
            @else  
            <div class="list-body">
                <div class="list-cell">{{$v['id']}}</div>
                <div class="list-cell">{{$v['category_nome']}}</div>
                <div class="list-cell">{{$v['placa']}}</div>
                <div class="list-cell">{{$v['modelo']}}</div>
                <div class="list-cell">{{$v['fabricante']}}</div>
                <div class="list-cell"><div style="width:50%;height:20px;margin-left: 27px;margin-top: 3px;padding: 0 2rem;border:2px double black;background:<?php echo $v->cor;?>"></div></div>
                <div class="list-cell">{{$v['ano']}}</div>

            </div>  
            @endif


        @endforeach
    </div>

    @else
    <h1 class="section__title">É necessário realizar um cadastro.</h1>
    <span class="section__subtitle">Lista de Veículos está vazia!</span>
    <script>
        window.alert('Não há cadastros!')
    </script>

    @endif


</section>
@endsection

