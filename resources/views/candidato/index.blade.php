<!DOCTYPE html>
<html>
<head>
  <title>Lista de personas en Coop</title>
  <style>
    table{
        margin: auto;
        width: 50% !important; 
    }
  </style>
</head>
<body>
@extends('layouts.mostrar')
@section('content')
<br>
    <div class="panel-heading text-center">TABLA DE CANDIDATOS REGISTRADOS</div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nro.</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
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
    </div>              
@endsection   
</body>
</html>
