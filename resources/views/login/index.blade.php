<!DOCTYPE html>
<html>
<head>
  <title>Nueva persona</title>
</head>
    <body>

        {{ Form::open(['route'=>'persona.store','method'=>'post']) }}
            {{Form::label('nombre', 'C.I.: ')}}
            {{Form::number('ci', null, ['id' => 'ci'])}}

            <br><br>
            {{Form::label('usuario','Usuario: ')}}
            {{Form::text('usuario', null, ['id' => 'usuario'])}}
            <br><br>
            {{Form::label('password', 'Contraseña: ')}}
            {{Form::text('password', null, ['id' => 'password'])}}
            <br><br>
            <br><br>
            {{Form::submit('Ingresar')}}

        {{Form::close()}}
    </body>
</html>
