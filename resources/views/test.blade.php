@extends('layouts.main')

@section('title','teste')

@section('content')

@if($nome == 'Bruno') 

<h2>O nome é Bruno</h2>

@elseif($nome == 'Caio')

<h2>O nome é Caio e tem {{$idade}}anos</h2>

@else

<p>O nome não é {{$nome}}</p>

@endif
<a href="/">
    <button  type="button" class="btn-outline-warning">
        <h3>Clique aqui pra Voltar a Home</h3>
    </button>
</a>

@endsection