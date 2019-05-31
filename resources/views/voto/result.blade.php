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
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Porcentaje (%)</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=1; ?>
                @foreach ($result as $res)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$res->candidato->persona->id}}</td>
                    <td>{{$res->candidato->persona->nombre.' '.$res->candidato->persona->apellidoP.' '.$res->candidato->persona->apellidoM}}</td>
                    <td>{{$total = round(($res->voto * 100) / $res->sum('voto'), 2)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
