<!DOCTYPE html>
<html>
<head>
  <title>Lista de personas en Coop</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="panel-heading text-center">Tabla de Electores Registrados</div>
    <table width='70%' border='1' align='center'>
        <thead>
            <tr>
                <th>Nro.</th>
                <th>C.I.</th>
                <th>Nombres</th>
            </tr>
        </thead>

        <tbody>
            <?php $i=1; ?>
            @foreach ($electores as $elector)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$elector->id}}</td>
                <td>{{$elector->name}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection       
</body>
</html>
