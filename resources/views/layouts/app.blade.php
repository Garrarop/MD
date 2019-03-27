<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MagicDreamsMC</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="/css/master.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top">
            <div class="container">
              <div class="media">
                  <img src="{{ asset('img/logo.png') }}" class="media-object" style="width:60px">
              </div>
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!--<ul class="navbar-nav mr-auto">
                      <form class="form-inline my-2 my-lg-0" action="/resultados">
                        <input class="form-control mr-sm-2" type="text" name='buscar' placeholder="¿Qué estas buscando?" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </form>
                    </ul> -->
                    <ul class="navbar-nav mr-auto">
                        <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0" href="/">{{__('Home')}}</a></li>
                        <p class="lead"></p>
                        <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0"  href="https://magicdreamsmc.enjin.com/">{{__('Forum')}}</a></li>
                        <p class="lead"></p>
                        <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0"  href="http://mgdreamsmc.buycraft.net/">{{__('Shop')}}</a></li>
                        <p class="lead"></p>
                        <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0"  href="/votar">{{__('Vote')}}</a></li>
                        <p class="lead"></p>
                        <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0"  href="/nosotros">{{__('About us')}}</a></li>
                        <p class="lead"></p>
                        <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0"  href="/contacto">{{__('Contact')}}</a></li>
                        <p class="lead"></p>
                        <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0"  href="http://play.mgdreamsmc.com:8123/#">Mapa</a></li>
                        <p class="lead"></p>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                          <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            @if (Route::has('register'))
                              <li style="margin-right: 3px;" class="nav-item active"><a class="nav-link btn btn-outline-primary my-2 my-sm-0" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle nav-link btn btn-outline-primary my-2 my-sm-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ strtoupper(Auth::user()->name) }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <!--<a class="dropdown-item" disabled href="/perfil/{{ Auth::user()->id }}">-->
                                  <a class="dropdown-item disabled" disabled href="#">
                                    <i class="fa fa-btn fa-user"></i>
                                      Perfil
                                      <span class="badge badge-info">Proximamente</span>
                                    </a>
                                    <p class="lead"></p>
                                    <a class="dropdown-item disabled" disabled href="#">
                                      <i class="fa fa-btn fa-cog"></i>
                                      Configuración
                                      <span class="badge badge-info">Proximamente</span>
                                    </a>
                                    <p class="lead"></p>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-btn fa-sign-out-alt"></i>
                                        {{ __('Logout') }}
                                    </a>
                                    <p class="lead"></p>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <br><br>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
  <footer class="footer" style="background: rgba(154, 147, 164, 0.36);">
    <div class="footer-copyright text-center py-3"><p>MagicDreams es un servidor de minecraft creado para los fans de Harry Potter. MagicDreams no está afiliado con J.K. Rowling, WizardingWorld, WarnerBross u otra entidad.</p> © 2019 Copyright:
      <a href="#"> MagicDreamsMC</a>
    </div>
  </footer>
</body>
</html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
