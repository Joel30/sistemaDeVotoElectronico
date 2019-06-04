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
                @if($total == 0)
                    <td width='70%'><div class="progress-bar bg-white" style='width:<?php echo $total ?>%'>
                        <b class="text-white">.</b>
                    </div></td>
                @else
                <td width='70%'><div class="progress-bar bg-info" style='width:<?php echo $total ?>%'>
                    <b class="text-info">.</b>
                </div></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
