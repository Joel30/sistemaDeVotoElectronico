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
                    <div class="panel-heading text-center">Registrar Elector</div>
            {{ Form::open(['route'=>'elector.store','method'=>'post']) }}
            <br>
                {{Form::label('persona_id', 'Elector: ')}}
                {{Form::select('persona_id', $electores, null)}}
                 <!-- <label for="persona_id" class="col-md-2 control-label">Elector: </label>
                    <div class="col-md-5">
                        <select id="persona_id" class="form-control" name="persona_id" value="{{ null }}" required autofocus>
                            <option>$electores</option>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Enviar</button>
                <br><br>
            {{Form::close()}}
                     </div>
                 </div>
            </div>
        </div>
    </div>   
    @endsection        
    </body>
</html>
