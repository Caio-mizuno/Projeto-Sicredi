@extends('layouts.main')


@section('title','Welcome User')

@section('content')

<section class="start__section section" >
    <div class="sicredi"></div>
    <div class="quadro-inicio">
        <div class="section__title" style="margin-top:5%;">Bem vindo, {{$user->name}}!</div>   
    </div>
</section>

@endsection