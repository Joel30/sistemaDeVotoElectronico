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
                        <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }}">
                        <label for="ci" class="col-md-2 control-label">CI</label>
                                <div class="col-md-5">
                                        <input id="ci" type="number" class="form-control" name="ci" value="{{ null }}" required autofocus>
                                        @if ($errors->has('ci'))
                                                <strong>{{ $errors->first('ci') }}</strong>
                                        @endif  
                                </div>
                        </div>        
                        <br><br>
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="nombre" class="col-md-2 control-label">Nombre</label>
                                <div class="col-md-5">
                                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ null }}" required autofocus>
                                        @if ($errors->has('nombre'))
                                                <strong>{{ $errors->first('nombre') }}</strong>
                                        @endif  
                                </div>
                        </div>
                        <br><br>
                        <div class="form-group{{ $errors->has('apellidoP') ? ' has-error' : '' }}">
                        <label for="apellidoP" class="col-md-2 control-label">Apellido Paterno</label>
                                <div class="col-md-5">
                                        <input id="apellidoP" type="text" class="form-control" name="apellidoP" value="{{ null }}" required autofocus>
                                        @if ($errors->has('apellidoP'))
                                                <strong>{{ $errors->first('apellidoP') }}</strong>
                                        @endif  
                                </div>
                        </div>
                        <br><br><br>
                        <div class="form-group{{ $errors->has('apellidoM') ? ' has-error' : '' }}">
                        <label for="apellidoM" class="col-md-2 control-label">Apellido Materno</label>
                                <div class="col-md-5">
                                        <input id="apellidoM" type="text" class="form-control" name="apellidoM" value="{{ null }}" required autofocus>
                                        @if ($errors->has('apellidoM'))
                                                <strong>{{ $errors->first('apellidoM') }}</strong>
                                        @endif  
                                </div>
                        </div>
                        <br><br><br>
                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                        <label for="direccion" class="col-md-2 control-label">Direccion</label>
                                <div class="col-md-5">
                                        <input id="direccion" type="text" class="form-control" name="direccion" value="{{ null }}" required autofocus>
                                        @if ($errors->has('direccion'))
                                                <strong>{{ $errors->first('direccion') }}</strong>
                                        @endif  
                                </div>
                        </div>
                        <br><br>
                        <div class="form-group{{ $errors->has('fechaNacimiento') ? ' has-error' : '' }}">
                        <label for="fechaNacimiento" class="col-md-2 control-label">Fecha de Nacimiento</label>
                                <div class="col-md-5">
                                        <input id="fechaNacimiento" type="date" class="form-control" name="fechaNacimiento" value="{{ null }}" required autofocus>
                                        @if ($errors->has('fechaNacimiento'))
                                                <strong>{{ $errors->first('fechaNacimiento') }}</strong>
                                        @endif  
                                </div>
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
                    {{ Form::close() }}
                
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
