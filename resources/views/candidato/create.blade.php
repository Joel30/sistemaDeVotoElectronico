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
            <div class="card-header">
                <h4 class="text-right mb-0">Gestión <span class="text-info"><?=date('Y')?></span></h4>
            </div>
            <div class="card-body">
                <h3 class="mb-5">REGISTRAR CANDIDATO</h3>
                <p class="text-monospace">Seleccione a la persona que desea registrar como candidato</p>

                @if (session('mensaje'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session()->get('mensaje') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                {{ Form::open(['route'=>'candidato.store','method'=>'post']) }}

                <?php if ($errors->has('persona_id')) $err = ' is-invalid';else $err = '';?>

                <div class="form-group row">
                    <label for="persona_id" class="col-md-4 col-form-label text-md-right">Candidato</label>
                    <div class="col-md-7">
                        <select class="form-control{{ $errors->has('persona_id') ? ' is-invalid' : '' }}" name="persona_id" id="persona_id" required>
                        @foreach($candidatos as $per)
                            @if (App\Candidato::where('persona_id', $per->id)->whereYear('created_at', date('Y'))->first() == null)
                                <option value="{{$per->id}}">{{$per->name}}</option>
                            @endif
                        @endforeach
                        </select>
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
</div>
@endsection
</body>
</html>
