@extends('layouts.main')

@section('title','Create_categoria')



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
        <h3>Cadastro de Categoria</h3>
      
    
        <form method="POST" action="/category">
        @csrf
            <div class=" form-group form-position">
                <div class="formulario-data">
                    <label for="title">Nome </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="formulario-data">
                    <label for="title">Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor" >
                </div>
                <div class="formulario-data">
                    <input class="btn btn-primary" type="submit" value="Registrar" >
                </div>
            </div>
        </form> 
    </div>

</section>

    



@endsection