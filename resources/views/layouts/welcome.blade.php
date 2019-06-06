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
  <br><br>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 align-content-center">
          <img id="humo" src="{{ asset('img/humo.png') }}" alt="">
          <img id="logo" src="{{ asset('img/LogoMD.png') }}" alt="">
        </div>
    </div>
  </div>
</body>
</html>
