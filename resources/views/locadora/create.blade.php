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
        <h3>Cadastro de Locação</h3>


        <form method="POST" action="/locadora">
            @csrf
            <div class=" form-group form-position">
                <div class="formulario-data">
                    <label for="title">Data final de uso:</label>
                    <input type="date" class="form-control" id="dias" name="dias">
                </div>

                <div class="formulario-data">
                    <label for="title">Veículos Disponíveis:</label>
                    <select style="font-size:1rem;" class="form-control form-control-lg" id="vehicle" name="vehicle">

                        @foreach ($allVehicle as $v)
                            @if ($v->status==0)

                            <option style="font-size:1rem;">
                                [Categ.: {{''.$v->category_nome}}
                                [Placa: {{''.$v->placa}}
                                [Fab.: {{''.$v->fabricante}}
                                [Mod.: {{''.$v->modelo}}
                                <div class="container" style="background:<?php echo $v->cor; ?>"></div>
                            </option>

                            @endif
                        @endforeach
                    </select>

                </div>
                <div class="formulario-data">
                    <div class="formulario-data">
                        <label for="title">Clientes Disponíveis:</label>
                        <select style="font-size:1rem;" class="form-control form-control-lg" id="cliente" name="cliente">

                            @foreach ($allClient as $c)
                                @if ($c->status==0)

                                <option style="font-size:1rem;">
                                Nome: {{''.$c->nome}} CPF: {{''.$c->cpf}}
                                </option>
                                
                                @endif
                            @endforeach
                        </select>

                    </div>
                    <div class="formulario-data">
                        <input class="btn btn-primary" type="submit" value="Registrar">
                    </div>
                </div>
        </form>
    </div>

</section>





@endsection