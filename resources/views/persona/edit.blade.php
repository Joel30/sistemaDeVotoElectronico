<!-- <!DOCTYPE html>
<html>
<head>
  <title>Nueva persona</title>
</head>
<body>

{{ Form::open(['route'=>['persona.update', 'id' => $persona->id],'method'=>'put', 'files' => 'true']) }}

        <img width="100px" src="{{Storage::url($persona->avatar)}}"><br>
        {{Form:: label('avatar', "Avatar: ")}}
        {{Form:: file('avatar', null, ['id' => 'avatar'])}}
        <br>
        {{Form::label('ci', 'C.I.: ')}}
        {{Form::number('ci', $persona->ci, ['id' => 'ci', 'disabled'])}}
        <br><br>
        {{Form::label('nombre','Nombre: ')}}
        {{Form::text('nombre',  $persona->nombre, ['id' => 'nombre'])}}
        <br><br>
        {{Form::label('apellidoP', 'Apellido Paterno: ')}}
        {{Form::text('apellidoP',  $persona->apellidoP, ['id' => 'apellidoP'])}}
        <br><br>
        {{Form::label('apellidoM', 'Apellido Materno: ')}}
        {{Form::text('apellidoM',  $persona->apellidoM, ['id' => 'apellidoM'])}}
        <br><br>
        {{Form::label('direccion', 'Direccion: ')}}
        {{Form::text('direccion',  $persona->direccion, ['id' => 'direccion'])}}
        <br><br>
        {{Form::label('fechaNacimiento', 'Fecha de Nacimiento: ')}}
        {{Form::date('fechaNacimiento',  $persona->fechaNacimiento, ['id' => 'fechaNacimiento'])}}
        <br><br>
        <br><br>
        {{Form::submit('Actualizar')}}
        {{Form::reset('Borrar')}}

    {{Form::close()}}
</body>
</html> -->

@extends('layouts.registrar')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Datos</div>
                <div class="card-body">
                {{ Form::open(['route'=>['persona.update', 'id' => $persona->id],'method'=>'put', 'files' => 'true']) }}
                <img width="100px" src="{{Storage::url($persona->avatar)}}"><br>
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
                                    <input id="ci" type="number" class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" value="{{ $persona->ci }}" required autofocus readonly>
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
                                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ $persona->nombre }}" required autofocus>
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
                                        <input id="apellidoP" type="text" class="form-control{{ $errors->has('apellidoP') ? ' is-invalid' : '' }}" name="apellidoP" value="{{ $persona->apellidoP }}" required autofocus>
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
                                        <input id="apellidoM" type="text" class="form-control{{ $errors->has('apellidoM') ? ' is-invalid' : '' }}" name="apellidoM" value="{{ $persona->apellidoM }}" required autofocus>
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
                                        <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ $persona->direccion }}" required autofocus>
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
                                        <input id="fechaNacimiento" type="date" class="form-control{{ $errors->has('fechaNacimiento') ? ' is-invalid' : '' }}" name="fechaNacimiento" value="{{ $persona->fechaNacimiento }}" required autofocus>
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
                                    Actualizar
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    Deshacer
                                </button>
                            </div>
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
