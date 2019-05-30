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
        {{Form::label('nombre','Nombre: ')}}
        {{Form::text('nombre', null, ['id' => 'nombre'])}}
        <br><br>
        {{Form::label('apellidoP', 'Apellido Paterno: ')}}
        {{Form::text('apellidoP', null, ['id' => 'apellidoP'])}}
        <br><br>
        {{Form::label('apellidoM', 'Apellido Materno: ')}}
        {{Form::text('apellidoM', null, ['id' => 'apellidoM'])}}
        <br><br>
        {{Form::label('direccion', 'Direccion: ')}}
        {{Form::text('direccion', null, ['id' => 'direccion'])}}
        <br><br>
        {{Form::label('fechaNacimiento', 'Fecha de Nacimiento: ')}}
        {{Form::date('fechaNacimiento', null, ['id' => 'fechaNacimiento'])}}
        <br><br>
        <br><br>
        {{Form::submit('Registrar')}}
        {{Form::reset('Limpiar')}}

    {{Form::close()}}
</body>
</html>
