<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/img/icono.png">
        <title>MagicDreams</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    MagicDreamsMC
                </div>

                <div class="links">
                    <a href="/home">Inicio</a>
                    <a href="https://magicdreamsmc.enjin.com/">Foro</a>
                    <a href="http://mgdreamstienda.craftingstore.net/">Tienda</a>
                    <a href="/votar">Votar</a>
                    <a href="/nosotros">¿Quienes somos?</a>
                    <a href="/contacto">Contacto</a>
                    <form class="" action="/lang" method="post">
                      {{ csrf_field() }}
                      <label for="es">Español</label>
                      <input type="radio" name="lang" value="es" id="es">
                      <label for="en">English</label>
                      <input type="radio" name="lang" value="en" id="en">
                      <input type="submit" name="" value="{{ __('Accept') }}">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
