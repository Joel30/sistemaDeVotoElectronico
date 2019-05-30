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
                    <th>Nombres</th>
                    <th>Porcentaje (%)</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=1; ?>
                @foreach ($resultados as $resultado)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$resultado->nombre.' '.$resultado->paterno.' '.$resultado->materno}}</td>
                    <td>{{$resultado->porcentaje}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
