@extends('layouts.main')

@section('title','Locadora_Page')

@section('content')

<section class="section">

    <div class="quadro-locadora">
        <h1>Atividades</h1>
        <div class="quadro">


            <div class="locadora__button">
                <a href="/locadora/create" class="button__locadora button">Efetivar locação</a>
            </div>
            <div class="locadora__button">
                <a href="/locadora/list" class="button button__locadora ">Lista de Locações</a>
            </div>
        </div>
    </div>

    <div class="quadro-locadora">
        <div style="display: flex;align-items: center;">
        <i class="uil uil-car-sideview" style="font-size: 2rem;margin-right:20px;"></i><h1>Veículos</h1>
        </div>
    
        <div class="quadro">


            <div class="locadora__button">
                <a href="/vehicle/create" class="button__locadora button">
                    <i class="uil uil-plus"></i><span style="margin-left:20px;">Cadastrar</span>
                </a>
            </div>
            <div class="locadora__button">
                <a href="/vehicle/list" class="button button__locadora "><i class="uil uil-clipboard-notes"></i></a>
            </div>

            <div class="quadro-locadora">
                <h5>Categorias</h5>
                <div class="">


                    <div class="locadora__button">
                        <a href="/category/create" class="button__locadora button">
                            <i class="uil uil-plus"></i><span style="margin-left:20px;">Cadastrar</span>
                        </a>
                    </div>
                    <div class="locadora__button">
                        <a href="/category/list" class="button button__locadora ">
                            <i class="uil uil-clipboard-notes"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="quadro-locadora">
        <div style="display: flex;align-items: center;">
            <i class="uil uil-user-square" style="font-size: 2rem;margin-right:20px;"></i><h1>Clientes</h1>
        </div>    
        <div class="quadro">


            <div class="locadora__button">
                <a href="/cliente/create" class="button__locadora button">
                    <i class="uil uil-plus"></i><span style="margin-left:20px;">Cadastrar</span>
                </a>
            </div>
            <div class="locadora__button">
                <a href="/cliente/list" class="button button__locadora "><i class="uil uil-clipboard-notes"></i></a>
            </div>
        </div>
    </div>


</section>
@endsection