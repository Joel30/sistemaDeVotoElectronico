
@extends('layouts.voto')

@section('title0')
    <a class="navbar-brand px-4 py-0 text-secondary btn btn-outline-secondary" href="{{ url('/voto/resultado') }}">Resultados</a>
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
            @if($res == 1)
            <fieldset disabled>
            @endif
            <div class="form-row">
                <div class="col-md-12 ">
                    @if (session('mensaje'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('mensaje')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if (session('mensajeS'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('mensajeS')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <?php if ($errors->has('ci')) $err = ' is-invalid';else $err = '';?>
                    {{Form:: label('ci', 'Nro de Carnet  ', ['class' => 'validationDefault01'])}}
                    {{Form:: text('ci', null, ['id' => 'ci', 'placeholder' => 'Introduzca el CI', 'required', 'class' => "form-control".$err])}}
                    @if ($errors->has('ci'))
                    <span class="invalid-feedback" align ="right">
                        <strong>{{$errors->first('ci')}}</strong>
                    </span>
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
            @if($res == 1)
            </fieldset>

            <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                <b>El Sistema se encuentra Cerrado</b>
            </div>
            @endif

            {{Form::close()}}
        </div>
    </div>
</div>
@endsection
