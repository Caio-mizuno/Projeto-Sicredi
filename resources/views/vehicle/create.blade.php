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
    @if ($allCategory->isNotEmpty())
    <div class="quadro">
        <h3>Cadastro de Veículos</h3>
      
    
        <form method="POST" action="/vehicle">
        @csrf
            <div class=" form-group form-position">

                <div class="formulario-data">
                    <label for="title">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa">
                </div>

                <div class="formulario-data">
                    <label for="title">Cor</label>
                    <input type="color" class="form-control" id="cor" name="cor">
                </div>

                <div class="formulario-data">
                    <label for="title">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" >
                </div>

                <div class="formulario-data">
                    <label for="title">Fabricante</label>
                    <input type="text" class="form-control" id="fabricante" name="fabricante" >
                </div>

                <div class="formulario-data">
                    <label for="title">Ano</label>
                    <input type="number" min="1900" max="2099" step="1" value="2016" class="form-control" id="ano" name="ano" >
                </div>

                <div class="formulario-data">
                    <label for="title">Selecione uma categoria:<i class="uil uil-arrow-circle-down"></i></label>
                    <select class="form-control form-control-lg" id="category_nome" name="category_nome">
                        
                    @foreach ($allCategory as $category)
                    
                         <option>{{$category->nome}}</option>
                    
                    @endforeach
                    </select>

                </div> 

                <div class="formulario-data">
                    <input class="btn btn-primary" type="submit" value="Cadastrar" >
                </div> 

            </div>
        </form> 
    </div>
    @else
    <div class="quadro container">
         <h1 class="section__title">É necessário cadastrar uma categoria primeiro!</h1>
         <a href="/category/create"><button class="btn btn-outline-info">Criar uma categoria<i class="uil uil-arrow-right"></i></button></a>
    </div>
    @endif
</section>

    



@endsection