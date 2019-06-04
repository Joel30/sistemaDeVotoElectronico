
@extends('layouts.voto')

@section('title0')
    <a class="navbar-brand px-5 text-info btn btn-outline-info" href="{{ url('/voto/resultado') }}">Resultados</a>
@endsection

@section('title1')
    VOTACIÓN
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <p class="display-4 text-center">INGRESE A VOTAR</p><br>
            {{Form:: open(['route'=>'voto.enter', 'method' => 'get'])}} <!--post-->
            <div class="form-row">
                <div class="col-md-12 ">
                    @if (session('mensaje'))
                    <div class="alert alert-danger" role="alert">
                          {{session('mensaje')}}
                    </div>
                    @endif
                    {{Form:: label('ci', 'Nro de Carnet  ', ['class' => 'validationDefault01'])}}
                    {{Form:: text('ci', null, ['id' => 'ci', 'placeholder' => 'Introduzca el CI', 'required', 'class' => 'form-control'])}}
                    @if ($errors->has('ci'))
                        <p class="text-danger text-right">{{$errors->first('ci')}}</p>
                    @endif
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-4 ">
                            {{Form::submit('Ingresar', ['class' => 'btn btn-primary btn-block'])}}
                        </div>
                        <div class="col-md-4 ">
                            {{Form::reset('Borrar', ['class' => 'btn btn-secondary btn-block'])}}
                        </div>
                    </div>
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection
