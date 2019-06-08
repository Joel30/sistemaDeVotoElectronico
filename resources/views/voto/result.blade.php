@extends('layouts.voto')

@section('title1')
    RESULTADOS
@endsection

@section('content')
<div class="container mt-5">
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Nombres</th>
                <th></th>
                <th>Porcentaje (%)</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach ($result as $res)
            <tr>
                <td>{{$res->candidato->persona->nombre.' '.$res->candidato->persona->apellidoP.' '.$res->candidato->persona->apellidoM}}</td>
                <?php $total = round(($res->voto * 100) / $res->sum('voto'), 2) ?>
                <td><h6><?php echo $total ?> %</h6></td>
                <td width='70%'>
                    <div class="progress mt-2">
                        <div class="progress-bar bg-info" role="progressbar" style='width:<?php echo $total ?>%'  aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
