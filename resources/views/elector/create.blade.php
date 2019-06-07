<!DOCTYPE html>
<html>
<head>
  <title>Nueva persona</title>
</head>
<body>
@extends('layouts.registrar')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <h3>REGISTRAR ELECTOR</h3><br>
        <p class="text-monospace">Seleccione a la persona que desea registrar como elector</p>
            {{ Form::open(['route'=>'elector.store','method'=>'post']) }}
                {{Form::label('persona_id', 'Elector: ')}}
                {{Form::select('persona_id', $electores, null)}}
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
