<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Buscar Socios con prestamos</title>
    </head>
    <body>
@extends('layouts.app')
@section('content')
        @if (session('mensaje'))
            {{session('mensaje')}}
        @endif
         <!--post-->   
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Registro para votos</div>        
                <br>
                    {{Form:: open(['route'=>'voto.enter', 'method' => 'get'])}}
                    <label for="ci" class="col-md-2 control-label">Carnet de Identidad</label>
                                        <div class="col-md-5">
                                            <input id="ci" type="search" class="form-control mr-sm-2" name="ci" placeholder="Introduzca su CI para poder votar" required autofocus>
                                        </div>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    {{Form::close()}}
                <br><br>   
                
                 </div>
            </div>
        </div>
    </div>
</div>
<br><br>       
@endsection  
    </body>
</html>
=======
@extends('layouts.voto')

@section('title0')
    <a class="navbar-brand px-5 text-info btn btn-outline-info" href="{{ url('/voto/resultado') }}">Resultados</a>
@endsection

@section('title1')
    VOTACIÓN
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <p class="display-4 text-center">INGRESE A VOTAR</p><br>
            {{Form:: open(['route'=>'voto.enter', 'method' => 'get'])}} <!--post-->
            <div class="form-row">
                <div class="col-md-12 ">
                    @if (session('mensaje'))
                    <div class="alert alert-danger" role="alert">
                          {{session('mensaje')}}
                    </div>

                    @endif
                    {{Form:: label('ci', 'Nro de Carnet  ', ['class' => 'validationDefault01'])}}
                    {{Form:: text('ci', null, ['id' => 'ci', 'placeholder' => 'Introduzca el CI', 'required', 'class' => 'form-control'])}}
                    @if ($errors->has('ci'))
                        <p class="text-danger text-right">{{$errors->first('ci')}}</p>
                    @endif
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-4 ">
                            {{Form::submit('Ingresar', ['class' => 'btn btn-primary btn-block'])}}

                        </div>
                        <div class="col-md-4 ">
                            {{Form::reset('Borrar', ['class' => 'btn btn-secondary btn-block'])}}
                        </div>
                    </div>
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection
>>>>>>> 120f8c50f8294496536d2e84dfdb93a7ebe9db9f
