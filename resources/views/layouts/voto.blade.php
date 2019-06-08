<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Buscar Socios con prestamos</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script  src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>

    </head>
    <body>
        <div id="voto">
            <div class="bg-dark" style="background-color: #f9f9f9;">
                <nav class="navbar navbar-dark navbar-light navbar-static-top py-3" style="background-color: #f9f9f9;">
                    <div>
                        <a class="navbar-brand ml-5 px-4 py-0 text-secondary btn btn-outline-secondary" href="{{ url('/') }}">Inicio</a>
                        @yield('title0')
                    </div>

                    <b class="navbar-brand text-secondary mr-5">@yield('title1')</b>
                </nav>
            </div>

            @yield('content')
        </div>
        <script  src="{{ asset('js/popper.min.js') }}"></script>
        <script  src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
