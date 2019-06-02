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
                    <div class="panel-heading text-center">Registrar Candidato</div>
    {{ Form::open(['route'=>'candidato.store','method'=>'post']) }}
        <br><br>
        {{Form::label('persona_id', 'Candidato: ')}}
        {{Form::select('persona_id', $candidatos, null)}}
        <button type="submit" class="btn btn-primary">Enviar</button>
    {{Form::close()}}
                   </div>
              </div>
            </div>
        </div>
    </div>   
    @endsection    
</body>
</html>
