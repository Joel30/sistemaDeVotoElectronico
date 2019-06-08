<!DOCTYPE html>
<html>
<head>
  <title>Nueva persona</title>
</head>
<body>
@extends('layouts.registrar')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <h3>REGISTRAR ELECTOR</h3><br>
        <p class="text-monospace">Seleccione a la persona que desea registrar como elector</p>
        @if (session('mensaje'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('mensaje') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
            {{ Form::open(['route'=>'elector.store','method'=>'post']) }}
                <?php if ($errors->has('persona_id')) $err = ' is-invalid';else $err = '';?>
                <div class="form-group row mt-5">
                    {{Form::label('persona_id', 'Elector: ', ["class" => "col-md-3 col-form-label text-md-right" ])}}
                    <div class="col-md-7">
                        {{Form::select('persona_id', $electores, null, ["class" => "form-control".$err, "required", "autofocus"])}}
                        @if ($errors->has('persona_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('persona_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0 mt-4">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                </div>
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection
</body>
</html>
