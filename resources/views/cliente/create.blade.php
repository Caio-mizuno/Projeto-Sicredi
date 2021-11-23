@extends('layouts.main')

@section('title','Create_Cliente')



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
        <h3>Cadastro de Clientes</h3>
      
    
        <form method="POST" action="/cliente">
        @csrf
            <div class=" form-group form-position">
                <div class="formulario-data">
                    <label for="title">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="formulario-data">
                    <label for="title">CPF:</label>
                    <input type="number" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="formulario-data">
                    <label for="title">CNH:</label>
                    <input type="text" class="form-control" id="cnh" name="cnh" >
                </div>
                <div class="formulario-data">
                    <label for="title">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" >
                </div>
                <div class="formulario-data">
                    <label for="title">N° Cartão de crédito:</label>
                    <input type="text" class="form-control" id="cartao" name="cartao" >
                </div>
                <div class="formulario-data">
                    <input class="btn btn-primary" type="submit" value="Registrar" >
                </div>
            </div>
        </form> 
    </div>

</section>

    



@endsection