<!DOCTYPE html>
<html>
<head>
  <title>Lista de personas en Coop</title>
  <style>
    table{
        margin: auto;
        width: 70% !important; 
    }
  </style>
</head>
<body>
@extends('layouts.mostrar')
@section('content')
<br>
<div class="panel-heading text-center">TABLA DE PERSONAS REGISTRADAS</div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nro.</th>
                <th scope="col">C.I.</th>
                <th scope="col">Nombres</th>
                <th scope="col">Imagen</th>
                <th scope="col">Direccion</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Actualizar Datos</th>
            </tr>
        </thead>

        <tbody>
            <?php $i=1; ?>
            @foreach ($personas as $persona)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$persona->ci}}</td>
                <td>{{$persona->nombre.' '.$persona->apellidoP.' '.$persona->apellidoM}}</td>
                {{--dd($persona->avatar)--}}
                <td><img width="100px" src="{{Storage::url($persona->avatar)}}"></td>
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
</div>    
@endsection
</body>
</html>
