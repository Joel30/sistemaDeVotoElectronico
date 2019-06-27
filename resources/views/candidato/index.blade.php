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

<div class="container mt-5">
    {{Form::open(["url" => "candidato", "method" => "get"])}}
    <div class="form-group row">
        <label for="year" class="col-md-4 col-form-label text-md-right"><b class="text-primary">GESTIÓN: </b></label>
        <div class="col-md-4">
            <?php $data = 0; ?>
            <select class="form-control" name="year" id="year">
                <option value="{{date('Y')}}">
                </option>
                @foreach($candidatos as $candidato)
                    @if($data != substr($candidato->created_at, 0, 4)))
                    <option value="{{substr($candidato->created_at, 0, 4)}}">
                        {{$data = substr($candidato->created_at, 0, 4)}}
                    </option>

                    @endif
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <input type="submit" name="submit" value="Ver" class="btn btn-success px-5">
        </div>
    </div>
    {{Form::close()}}
</div>

<?php
$year = date('Y');
    if (isset($_GET['submit'])) {
        $year = $_GET['year'];
    }
?>
    <div class="panel-heading text-center my-4">CANDIDATOS REGISTRADOS<b class="text-info"> Gestión: {{$year}}</b></div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nro.</th>
                    <!--th scope="col">ID</th-->
                    <th scope="col">Nombres</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=1; ?>
                @foreach ($candidatos as $candidato)
                <tr>
                    @if($year == substr($candidato->created_at, 0, 4))
                        <td>{{$i++}}</td>
                        <!--td>{{--$candidato->id--}}</td-->
                        <td>{{$candidato->name}}</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

</body>
</html>
