@extends('layouts.voto')

@section('title')
    CANDIDATOS
@endsection

@section('content')
<div class="container mt-5" >

        {{Form::open(['route' => 'voto.update', 'method' => 'post'])}}
            <table class="table mb-5" >
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nro.</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i=1; ?>
                    @foreach ($candidatos as $candidato)
                    <tr>
                        <td scope="row">{{$i++}}</td>
                        <td>{{$candidato->id}}</td>
                        <td>{{$candidato->name}}</td>
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio{{$i}}" name="voto" class="custom-control-input" value="{{$candidato->id}}">
                                <label class="custom-control-label" for="customRadio{{$i}}"></label>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{Form::hidden('elector', $electores->elector->id)}}

            <div class="row justify-content-center">
                @if ($errors->has('voto'))
                    <div class="alert alert-warning col-md-10" role="alert">
                          {{$errors->first('voto')}}
                    </div>
                @endif
                <div class="col-md-3">
                    {{Form::submit('Votar', ['class' => 'btn btn-success btn-block'])}}
                </div>
            </div>

        {{Form::close()}}
</div>
@endsection
