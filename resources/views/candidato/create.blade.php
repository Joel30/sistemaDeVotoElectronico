<!DOCTYPE html>
<html>
<head>
  <title>Nueva persona</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <h3>REGISTRAR CANDIDATO</h3><br>
        <p class="text-monospace">Seleccione a la persona que desea registrar como candidato</p>
            {{ Form::open(['route'=>'candidato.store','method'=>'post']) }}
                {{Form::label('persona_id', 'Candidato: ')}}
                {{Form::select('persona_id', $candidatos, null)}}
                <!-- <div class="row justify-content-center">
                    <div class="col-md-4"> -->
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    <!-- </div>
                </div>     -->
            {{Form::close()}}
        </div>    
    </div>
</div>
@endsection      
</body>
</html>
