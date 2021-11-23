@extends('layouts.main')

@section('title','Create_Users')

@section('content')
<div class="container-fluid">
    <div class="row">
        @if(!empty($msg))
        <p class="trigger critical">{{$msg}}</p>       
        @endif
        
        </div>
</div>

<section class="section">
    <div class="quadro">
        <h3>Cadastro de usuário</h3>
        <form method="POST" action="/users">
        @csrf
            <div class=" form-group form-position">
                <div class="formulario-data">
                    <label for="title">Nome de usuário</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="formulario-data">
                    <label for="title">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="formulario-data">
                    <label for="title">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="formulario-data">
                    <input class=" btn btn-primary" type="submit" value="Registrar">
                </div>
            </div>
        </form>
    </div>
</section>


@endsection