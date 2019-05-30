<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Buscar Socios con prestamos</title>
    </head>
    <body>
        @if (session('mensaje'))
            {{session('mensaje')}}
        @endif
        {{Form:: open(['route'=>'voto.enter', 'method' => 'get'])}} <!--post-->
            {{Form:: label('ci', 'C.I.: ')}}
            {{Form:: text('ci', null, ['id' => 'ci', 'placeholder' => 'Introduzca el CI', 'required'])}}
            <br><br>
            {{Form::submit('Ingresar')}}
            {{Form::reset('Borrar')}}
        {{Form::close()}}
    </body>
</html>
