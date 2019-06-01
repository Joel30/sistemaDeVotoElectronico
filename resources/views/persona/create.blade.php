<!DOCTYPE html>
<html>
<head>
  <title>Nueva persona</title>
</head>
<body>
@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Registrar Persona</div>
                    {{ Form::open(['route'=>'persona.store','method'=>'post']) }}
                        <br><br>
                        <label for="ci" class="col-md-2 control-label">CI</label>
                        <div class="col-md-5">
                                <input id="ci" type="number" class="form-control" name="ci" value="{{ old('ci') }}" required autofocus>
                        </div>
                        <br><br>
                        <label for="nombre" class="col-md-2 control-label">Nombre</label>
                        <div class="col-md-5">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
                        </div>
                        <br><br>
                        <label for="apellidoP" class="col-md-2 control-label">Apellido Paterno</label>
                        <div class="col-md-5">
                                <input id="apellidoP" type="text" class="form-control" name="apellidoP" value="{{ old('nombre') }}" required autofocus>
                        </div>
                        <br><br><br>
                        <label for="apellidoM" class="col-md-2 control-label">Apellido Materno</label>
                        <div class="col-md-5">
                                <input id="apellidoM" type="text" class="form-control" name="apellidoM" value="{{ old('nombre') }}" required autofocus>
                        </div>
                        <br><br><br>
                        <label for="direccion" class="col-md-2 control-label">Direccion</label>
                        <div class="col-md-5">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('nombre') }}" required autofocus>
                        </div>
                        <br><br>
                        <label for="fechaNacimiento" class="col-md-2 control-label">Fecha de Nacimiento</label>
                        <div class="col-md-5">
                                <input id="fechaNacimiento" type="date" class="form-control" name="fechaNacimiento" value="{{ old('nombre') }}" required autofocus>
                        </div>
                        <br><br><br>
                        <div class="col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-primary">Limpiar</button> 
                        </div><br>
                    {{Form::close()}}
                  </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection    
</body>
</html>
