<!DOCTYPE html>
<html>
<head>
  <title>Nueva persona</title>
</head>
<body>

    {{ Form::open(['route'=>'candidato.store','method'=>'post']) }}
        <br><br>
        {{Form::label('persona_id', 'Candidato: ')}}
        {{Form::select('persona_id', $candidatos, null)}}
        <br><br>
        <br><br>
        {{Form::submit('Registrar')}}

    {{Form::close()}}
</body>
</html>
