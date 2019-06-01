<!DOCTYPE html>
<html>
<head>
  <title>Lista de personas en Coop</title>
</head>
<body>
    <table width='70%' border='1' align='center'>
        <thead>
            <tr>
                <th>Nro.</th>
                <th>C.I.</th>
                <th>Nombres</th>
                <th>Direccion</th>
                <th>Fecha de Nacimiento</th>
                <th>Actualizar Datos</th>
            </tr>
        </thead>

        <tbody>
            <?php $i=1; ?>
            @foreach ($personas as $persona)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$persona->ci}}</td>
                <td>{{$persona->nombre.' '.$persona->apellidoP.' '.$persona->apellidoM}}</td>
                <td>{{$persona->direccion}}</td>
                <td>{{$persona->fechaNacimiento}}</td>
                <td>
                    <a href="{{route('persona.edit', $persona->id)}}"> Editar </a> |
                    <a href="{{route('persona.destroy', $persona)}}" onclick="return confirm('Esta seguro de eliminar a la persona con ci: {{ $persona->ci}}')"> Eliminar </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
