@extends('layouts.app')
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
                        <div class="col-md-offset-3">
                                <button id="btnSubmit" type="submit" class="btn btn-primary"><span></span>Enviar</button>
                                <button type="reset" class="btn btn-primary">Limpiar</button>
                        </div>
                        <!-- <div id="myAlert" class="alert alert-success collapse">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                Los datos se guardaron con exito!
                        </div> -->
                    {{ Form::close() }}
                  </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script type="text/javascript">
        $(document).ready(function(){
                $('#btnSubmit').click(function(){
                        $('#myAlert').show('fade');
                })
        })
</script> -->
</body>
</html>
