<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projeto - Laravel</title>

    <!-- CSS BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="../../css/styles.css" rel="stylesheet">
    <script src="../../js/scripts.js"></script>
    

    <title>@yield('title')</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <div class="container-fluid">
                
                @auth
                <a  id="logo" class="navbar-brand" href="/" >
                   <img src="../img/sicredi.png" width="50px" height="50px" style="border-radius: 50%;">
                
                </a>
                @endauth
                @guest
                <a  class="navbar-brand" href="/">
                   <img src="../img/sicredi.png" width="50px" height="50px" style="border-radius: 50%;">
                
                </a>
                @endguest

                



                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText" style="font-size: 1.3rem;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li> -->
                        
                        @auth
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/users/create">Cadastrar</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/users/list">Lista de usuários</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="/locadora/locadoraPage">Locadora</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/formComplaint/create">Formulário de Denúncias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/profile">Perfil   <i class="uil uil-user-circle"></i></a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link" 
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        
                                    Sair
                                    <i class="uil uil-signout"></i>
                                
                                </a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a class="nav-link btn btn-warning" href="/login">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success" href="/register">Registrar-se</a>
                        </li>
                        @endguest
                    </ul>
                    
                </div>
            </div>
        </nav>


    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="trigger success">{{ session('msg') }} </p>       
                
                @elseif (session('msg1'))
                <p class="trigger warning">{{ session('msg1') }} </p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <footer class="footer">

        <p>&copy; MizunoCaio. All rights reserved. </p>

    </footer>
    <!-- Production version -->

</body>

</html>