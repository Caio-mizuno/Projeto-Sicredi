@extends('layouts.main')

@section('title','Create_Locadora')



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
        <h3>Cadastre sua denúncia</h3>
      
    
        <form method="POST" action="/formComplaint" enctype="multipart/form-data">
        @csrf
            <div class=" form-group form-position">
                <div class="formulario-data">
                    <label for="title">Nome</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="formulario-data">
                    <label for="title">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="formulario-data">
                    <label for="title">RG</label>
                    <input type="text" class="form-control" id="rg" name="rg">
                </div>
                <div class="formulario-data">
                    <label for="title">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
                <div class="formulario-data">
                    <label for="title">Rua</label>
                    <input type="text" class="form-control" id="rua" name="rua">
                </div>
                <div class="formulario-data">
                    <label for="title">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" >
                </div>
                <div class="formulario-data">
                    <label for="image">Insira a Imagem:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <div class="formulario-data ">
                    <label for="date">Data de início:</label>
                    <input  type="date" class="form-control-file" id="dateStart" name="dateStart">
                </div>
                <div class="formulario-data">
                    <label for="date">Data final:</label>
                    <input  type="date" class="form-control-file" id="dateFinal" name="dateFinal">
                </div>
                <div class="formulario-data">
                    <label for="title">Descrição</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="formulario-data">
                    <input class="btn btn-primary" type="submit" value="Registrar" >
                </div>
            </div>
        </form> 
    </div>

</section>

    



@endsection