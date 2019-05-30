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
            </tr>
        </thead>

        <tbody>
            <?php $i=1; ?>
            @foreach ($candidatos as $candidato)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$candidato->id}}</td>
                <td>{{$candidato->name}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
