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
