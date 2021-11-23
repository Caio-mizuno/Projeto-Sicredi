@extends('layouts.main')

@section('title','List_Users')

@section('content')



<section class="section">


    @if ($allUsers->isNotEmpty())
        
    <!-- Print each users -->
    <div class="section__title">Lista de usuários</div>
    <div class="quadro-userlist">
        
        <div class=" list-header">
            <div class="col-xs-6 col-sm-4 list-cell">Id</div>
            <div class="col-xs-6 col-sm-4 list-cell">name</div>
            <div class="col-xs-6 col-sm-4 list-cell">E-mail</div>
        </div>

        @foreach ($allUsers as $user)

            @if ($produto->id % 2 != 0)
            <div class="list-body">
                <div class="col-xs-6 col-sm-4 list-cell">{{$user['id']}}</div>
                <div class="col-xs-6 col-sm-4 list-cell">{{$user['name']}}</div>
                <div class="col-xs-6 col-sm-4 list-cell">{{$user['email']}}</div>
            </div>
            @else
            <div class="list-body"  style="background: #e9e9e9;">
                <div class="col-xs-6 col-sm-4 list-cell">{{$user['id']}}</div>
                <div class="col-xs-6 col-sm-4 list-cell">{{$user['name']}}</div>
                <div class="col-xs-6 col-sm-4 list-cell">{{$user['email']}}</div>
            </div>
            @endif

        @endforeach
    </div>
    
    @else
        <h1 class="section__title">É necessário realizar um cadastro.</h1>
        <span class="section__subtitle">Lista de usuário está vazia!</span>
        <script>window.alert('Não há cadastros!')</script>

    @endif
</section>
@endsection