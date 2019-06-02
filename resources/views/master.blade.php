<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <base href="{{ URL::asset('/')}}"> -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{url('css/sistemaDeVotoElectronico - copia style.css')}}"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script  src="{{ URL('js/jquery-3.4.1.min.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('persona/nuevo') }}">Crear Persona</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('persona') }}">| Ver personas registradas</a>
      </li>
    </ul>  
  </div>
</nav>
   
    <div class="container">
        @yield('content')
    </div>

    <div class="card">
        <div class="card-body text-center">
            Pagina Web Para Votos 2019 All Rights Reserved
        </div>
    </div>
    <br><br>
    
    <script  src="{{ URL('js/popper.min.js') }}"></script>
    <script  src="{{ URL('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>