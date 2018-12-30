<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #fff;*/
                /*background-image: url("img/fondowhatsapp.png");*/
                /*color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;*/
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
    <body class="body">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right ">
                    @auth
                        <a class="button-action" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="button-action" href="{{ route('login') }}">Iniciar sesión</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif

            <div class="contenido">
                <div class="contenido-titulo">
                    <div class="contenido-titulo-nombre">
                        <img style="width: 60px; height: 60px;" src="svg/coin.svg" alt="logo-iAhorroApp"><p style="display: inline;">&nbsp i<span class="color-blue">Ahorro</span>App</p>
                    </div>
                    <div class="contenido-titulo-descripcion">
                        Aplicación para gestionar los movimientos de dinero
                    </div>
                </div>
                <div class="contenido-informacion">
                    
                </div>
            </div>
        </div>
    </body>
</html>
