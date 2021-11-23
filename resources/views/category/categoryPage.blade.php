@extends('layouts.main')

@section('title','Locadora_Page')

@section('content')

<section class="section">
    
    <div class="quadro-locadora">
        <h1 >Atividades</h1>
        <div class="quadro">
            
            
            <div class="locadora__button">
                <a href="/category/create" class="button__locadora button">Efetivar locação</a>
            </div>
            <div class="locadora__button">
                <a href="/category/list" class="button button__locadora ">Lista de Locações</a>
            </div>
        </div>
    </div>
        
</section>
@endsection