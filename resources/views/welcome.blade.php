<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Voto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .linksVoto > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                width: 50%;
                border-radius: 18px 18px 18px 18px;
                -moz-border-radius: 18px 18px 18px 18px;
                -webkit-border-radius: 18px 18px 18px 18px;
                border: lightblue 2px solid;
                padding: 20px;
                padding-left: 40px;
                padding-right: 40px;
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
                        <a href="{{ route('login') }}">Login</a>
                        <!--a href="{{-- route('register') --}}">Register</a-->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sistema de Votos
                </div><br>

                <div class="linksVoto">
                    <a href="{{route('voto.index')}}">Votar</a>
                </div>
            </div>
        </div>
    </body>
</html>
