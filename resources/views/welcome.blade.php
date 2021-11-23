@extends('layouts.main')


@section('title','Sicredi')

@section('content')

<section class="start__section section" style="height: 80%;">
    
    <div class="sicredi"></div>
    <div class="container" style="text-align: -webkit-center;">
        <div class="quadro-inicio">
            <div id="sicredi_quadro" class="quadro" style="border:3px solid rgb(66 143 56);">
                <div class="section__title" style="margin-top:5%;">Venha fazer parte desta família!</div>

                <div class="button__teste">
                    <a href="/login">
                        <button type="button" class="button__login  ">
                            Entrar
                        </button>
                    </a>
                </div>

                <div class="button__teste">
                    <a href="/register">
                        <button type="button" class="button__register ">
                            Registrar-se
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection