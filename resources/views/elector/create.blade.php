<!DOCTYPE html>
<html>
<head>
  <title>Nueva persona</title>
</head>
    <body>

        {{ Form::open(['route'=>'elector.store','method'=>'post']) }}
            {{Form::label('persona_id', 'Elector: ')}}
            {{Form::select('persona_id', $electores, null)}}
            <br><br>
            <br><br>
            {{Form::submit('Registrar')}}

        {{Form::close()}}
    </body>
</html>
