@extends('layouts.registrar')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Persona</div>
                <div class="card-body">
                    {{ Form::open(['route'=>'persona.store','method'=>'post', 'files' => 'true']) }}
                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>
                            <div class="col-md-6">
                                    {{Form:: file('avatar', null, ['id' => 'avatar'])}}
                                    @if ($errors->has('ci'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('ci') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ci" class="col-md-4 col-form-label text-md-right">CI</label>
                            <div class="col-md-6">
                                    <input id="ci" type="number" class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" value="{{ null }}" required autofocus>
                                    @if ($errors->has('ci'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('ci') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ null }}" required autofocus>
                                    @if ($errors->has('nombre'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="apellidoP" class="col-md-4 col-form-label text-md-right">Apellido Paterno</label>
                                <div class="col-md-6">
                                        <input id="apellidoP" type="text" class="form-control{{ $errors->has('apellidoP') ? ' is-invalid' : '' }}" name="apellidoP" value="{{ null }}" required autofocus>
                                        @if ($errors->has('apellidoP'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('apellidoP') }}</strong>
                                            </span>
                                        @endif
                                </div>
                        </div>
                        <div class="form-group row">
                        <label for="apellidoM" class="col-md-4 col-form-label text-md-right">Apellido Materno</label>
                                <div class="col-md-6">
                                        <input id="apellidoM" type="text" class="form-control{{ $errors->has('apellidoM') ? ' is-invalid' : '' }}" name="apellidoM" value="{{ null }}" required autofocus>
                                        @if ($errors->has('apellidoM'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('apellidoM') }}</strong>
                                            </span>

                                        @endif
                                </div>
                        </div>
                        <div class="form-group row">
                        <label for="direccion" class="col-md-4 col-form-label text-md-right">Direccion</label>
                                <div class="col-md-6">
                                        <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ null }}" required autofocus>
                                        @if ($errors->has('direccion'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('direccion') }}</strong>
                                            </span>

                                        @endif
                                </div>
                        </div>
                        <div class="form-group row">
                        <label for="fechaNacimiento" class="col-md-4 col-form-label text-md-right">Fecha de Nacimiento</label>
                                <div class="col-md-6">
                                        <input id="fechaNacimiento" type="date" class="form-control{{ $errors->has('fechaNacimiento') ? ' is-invalid' : '' }}" name="fechaNacimiento" value="{{ null }}" required autofocus>
                                        @if ($errors->has('fechaNacimiento'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('fechaNacimiento') }}</strong>
                                            </span>
                                        @endif
                                </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button id="btnSubmit" type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Limpiar
                                </button>
                            </div>
                        @if (session()->has('mensaje'))
                        <br>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                                <strong>La Persona</strong> {{ session()->get('mensaje') }} .
                            </div>
                        @endif    
                        </div>
                    {{ Form::close() }}
                  </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
</body>
</html>
