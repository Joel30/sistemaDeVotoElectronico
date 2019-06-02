<!DOCTYPE html>
<html>
<head>
  <title>Nueva persona</title>
</head>
<body>
@extends('layouts.app')
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
                                <input id="ci" type="number" class="form-control" name="ci" vvalue="{{ null }}" required autofocus>
                        </div>
                        <br><br>
                        <label for="nombre" class="col-md-2 control-label">Nombre</label>
                        <div class="col-md-5">
                                <input id="nombre" type="text" class="form-control" name="nombre" vvalue="{{ null }}" required autofocus>
                        </div>
                        <br><br>
                        <label for="apellidoP" class="col-md-2 control-label">Apellido Paterno</label>
                        <div class="col-md-5">
                                <input id="apellidoP" type="text" class="form-control" name="apellidoP" value="{{ null }}" required autofocus>
                        </div>
                        <br><br><br>
                        <label for="apellidoM" class="col-md-2 control-label">Apellido Materno</label>
                        <div class="col-md-5">
                                <input id="apellidoM" type="text" class="form-control" name="apellidoM" value="{{ null }}" required autofocus>
                        </div>
                        <br><br><br>
                        <label for="direccion" class="col-md-2 control-label">Direccion</label>
                        <div class="col-md-5">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ null }}" required autofocus>
                        </div>
                        <br><br>
                        <label for="fechaNacimiento" class="col-md-2 control-label">Fecha de Nacimiento</label>
                        <div class="col-md-5">
                                <input id="fechaNacimiento" type="date" class="form-control" name="fechaNacimiento" value="{{ null }}" required autofocus>
                        </div>
                        <br><br><br>
                        <div class="col-md-offset-3">
                                <button id="btnSubmit" type="submit" class="btn btn-primary"><span></span>Enviar</button>
                                <button type="reset" class="btn btn-primary">Limpiar</button> 
                        </div>
                        <!-- <div id="myAlert" class="alert alert-success collapse">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                Los datos se guardaron con exito!
                        </div> -->
                        <br>
                    {{Form::close()}}
                  </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection    
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script type="text/javascript">
        $(document).ready(function(){
                $('#btnSubmit').click(function(){
                        $('#myAlert').show('fade');
                })
        })
</script> -->
</body>
</html>
