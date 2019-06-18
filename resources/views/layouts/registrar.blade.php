<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema de Voto</title>

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"> -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="css/fontawesome.min">
    <script  src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light py-4" style="background-color: #f9f9f9;">
            <div class="container">

                    <a class="navbar-brand btn btn-outline-light" href="{{ url('/home') }}"> <img alt="Brand" src="{{asset('icons/h.png')}}" width="20px"> </a>
                    <div class="btn-group btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-outline-info" href="{{ url('persona/nuevo') }}">
                             Registrar Persona:
                        </a>
                        <a class="btn btn-outline-secondary" href="{{ url('elector/nuevo') }}">
                            Elector
                        </a>
                        <a class="btn btn-outline-secondary" href="{{ url('candidato/nuevo') }}">
                            Candidato
                        </a>
                    </div> 
                    <!-- <a class="navbar-brand btn btn-outline-light" href="{{ url('/home') }}"> <img alt="Brand" src="{{asset('icons/h.png')}}" width="20px"> </a>
                    <a class="navbar-brand btn btn-info" href="{{ url('persona/nuevo') }}">Registrar Persona:</a>
                    <a class="navbar-brand btn btn-secondary" href="{{ url('elector/nuevo') }}"> Elector</a>
                    <a class="navbar-brand btn btn-secondary" href="{{ url('candidato/nuevo') }}"> Candidato</a> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">
                        <a class="nav-link" href="{{-- url('/') --}}">Home</a>
                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item dropdown"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <!--li><a href="{{-- route('register') --}}">Register</a></li-->
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->usuario }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ url('/register') }}">Registrar</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script  src="{{ asset('js/popper.min.js') }}"></script>
    <script  src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
