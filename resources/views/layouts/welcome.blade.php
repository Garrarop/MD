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
    <script type="text/javascript" src="{{ asset('js/Pruebas.js') }}"></script>
</head>
<body>
  <div class="LogoMD">
    <img id="humo" src="{{ asset('img/humo5.png') }}" alt="">
    <img id="logo" src="{{ asset('img/LogoMD.png') }}" alt="">
    <div id="scroll" onclick="rolar()">
      <div id="mouse">
        <div id="wheel">
        </div>
      </div>
      <p>Scroll to continue</p>
    </div>
  </div>
  <div id="contenido">
    <img id="logo1" src="{{ asset('img/LogoMD.png') }}" style="padding-top: 10px;" alt="">
    <img id="logo2" src="{{ asset('img/LogoMD.png') }}" alt="">
    <img id="logo3" src="{{ asset('img/LogoMD.png') }}" alt="">
  </div>

{{--<footer class="footer" style="background: rgba(154, 147, 164, 0.36);">
    <div class="footer-copyright text-center py-3"><p>MagicDreams es un servidor de minecraft creado para los fans de Harry Potter. MagicDreams no está afiliado con J.K. Rowling, WizardingWorld, WarnerBross u otra entidad.</p> © 2019 Copyright:
      <a href="#"> MagicDreamsMC</a>
    </div>
  </footer>--}}
</body>
</html>
