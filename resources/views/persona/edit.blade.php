<!DOCTYPE html>
<html>
<head>
  <title>Nueva persona</title>
</head>
<body>

{{ Form::open(['route'=>['persona.update', 'id' => $persona->id],'method'=>'put']) }}
        {{Form::label('ci', 'C.I.: ')}}
        {{Form::number('ci', $persona->ci, ['id' => 'ci', 'disabled'])}}
        <br><br>
        {{Form::label('nombre','Nombre: ')}}
        {{Form::text('nombre',  $persona->nombre, ['id' => 'nombre'])}}
        <br><br>
        {{Form::label('apellidoP', 'Apellido Paterno: ')}}
        {{Form::text('apellidoP',  $persona->apellidoP, ['id' => 'apellidoP'])}}
        <br><br>
        {{Form::label('apellidoM', 'Apellido Materno: ')}}
        {{Form::text('apellidoM',  $persona->apellidoM, ['id' => 'apellidoM'])}}
        <br><br>
        {{Form::label('direccion', 'Direccion: ')}}
        {{Form::text('direccion',  $persona->direccion, ['id' => 'direccion'])}}
        <br><br>
        {{Form::label('fechaNacimiento', 'Fecha de Nacimiento: ')}}
        {{Form::date('fechaNacimiento',  $persona->fechaNacimiento, ['id' => 'fechaNacimiento'])}}
        <br><br>
        <br><br>
        {{Form::submit('Actualizar')}}
        {{Form::reset('Borrar')}}

    {{Form::close()}}
</body>
</html>
