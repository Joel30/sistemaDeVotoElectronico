@extends('layouts.voto')

@section('title1')
    CANDIDATOS
@endsection

@section('content')
<div class="sticky-top mt-4 ml-5 row" >
    <div class="">
        <img src="{{Storage::url($electores->avatar)}}" class="rounded-circle mr-4 border border-dark" width="60px" height="60px">
    </div>
    <div class="">
        <b>{{$electores->nombre.' '.$electores->apellidoP.' '.$electores->apellidoM}}<br>
        {{$electores->ci}}</b>
    </div>
</div>
<div class="container mt-5" >
    <?php $i=1; ?>
    {{Form::open(['route' => 'voto.update', 'method' => 'post'])}}
    <div class="row clearfix">
        @foreach ($candidatos as $candidato)
        <div class="col-md-4">
            <div class="col rounded bg-light">
                <div class="text-center">
                    <img  class="rounded m-2" height="120px" width="120px" src="{{Storage::url($candidato->avatar)}}">
                </div>
                <table class="table mb-5" >
                    <thead class="thead-light">
                        <tr align="center">
                            <th scope="col">{{$candidato->name}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr align="center">
                            <td><b>CI: </b> {{$candidato->ci}}</td>
                        </tr>
                        <tr align="center">
                            <td>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio{{++$i}}" name="voto" class="custom-control-input" value="{{$candidato->id}}">
                                    <label class="custom-control-label" for="customRadio{{$i}}">Elejir</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <br>
        </div>
        @endforeach
    </div>
            {{Form::hidden('elector', $electores->elector->id)}}
            <div class="row justify-content-center">
                @if ($errors->has('voto'))
                    <div class="alert alert-warning col-md-10" role="alert">
                          {{$errors->first('voto')}}
                    </div>
                @endif
                <div class="col-md-3 mb-5">
                    {{Form::submit('Votar', ['class' => 'btn btn-success btn-block'])}}
                </div>
            </div>
    {{Form::close()}}
</div>
@endsection
