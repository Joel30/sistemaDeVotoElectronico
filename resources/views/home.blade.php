@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">REGISTROS</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row justify-content-center">
                            <div class="col-md-8 ">
                                <button type="button" class="btn btn-outline-success btn-lg btn-block" onclick="location.href='persona/nuevo'">Registrar Persona</button>
                            </div>
                        </div><br>
                        <div class="row justify-content-center">
                            <div class="col-md-8 ">
                                <button type="button" class="btn btn-outline-primary  btn-lg btn-block" onclick="location.href='persona'">Ver Registros</button>
                            </div>
                        </div><br>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">SISTEMA DE VOTO</div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!isset($_GET['voto']))
                        <form action="/home" method="get">
                            <div class="row justify-content-center">
                                <div class="col-md-8 ">
                                    <input type="submit" class="btn btn-outline-success btn-lg btn-block" value="Iniciar / Cerrar" name="voto">
                                </div>
                            </div><br>
                        </form>
                        <div class="row justify-content-center">
                            <div class="col-md-8 ">
                                <a class="btn btn-outline-warning btn-lg btn-block" href="{{ url('/voto/resultado') }}">Resultados</a>
                            </div>
                        </div> <br>

                        @if (App\Sistema::all()->first()->estado == 1)
                            {{ Form::open(['route'=>'second.store','method'=>'post'])}}
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-outline-warning btn-lg btn-block" value="Segunda vuelta electoral" name="voto" onclick="return confirm('Se dara inicio a la segunda vuelta electoral')">
                                    </div>
                                </div>
                            {{Form::close()}}
                        @endif
                        @if (session('mensajes'))
                        <div class="row justify-content-center">
                            <div class="alert alert-warning alert-dismissible fade show col-md-8" role="alert">
                                <strong>{{ session()->get('mensajes') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                    @else
                    {{ Form::open(['route'=>'sistema.update','method'=>'post'])}}
                        <div class="form-group row justify-content-center">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="havilitar" name="sistema" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="havilitar">Habilitar votación</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="cerrar" name="sistema" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="cerrar">Cerrar votación</label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <input type="submit" class="btn btn-info px-5 mt-2" value="Enviar">
                        </div>
                    {{Form::close()}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
