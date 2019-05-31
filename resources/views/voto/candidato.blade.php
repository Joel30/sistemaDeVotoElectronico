<!DOCTYPE html>
<html>
<head>
  <title>Lista de personas en Coop</title>
</head>
    <body>
        {{Form::open(['route' => 'voto.update', 'method' => 'post'])}}
            <table width='70%' border='1' align='center'>
                <thead>
                    <tr>
                        <th>Nro.</th>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i=1; ?>
                    @foreach ($candidatos as $candidato)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$candidato->id}}</td>
                        <td>{{$candidato->name}}</td>
                        <td>
                            <input type="radio" name="voto" value="{{$candidato->id}}"><br>
                            <!--a href="persona/editar/ {{--$persona->id--}} ">Editar</a-->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                {{Form::hidden('elector', $electores['id'])}}
            {{Form::submit('Votar')}}
        {{Form::close()}}
    </body>
</html>
