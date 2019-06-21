@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro</div>
                <div class="card-body">
                    @if (session('mensaje'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('mensaje') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="persona_id" class="col-md-4 col-form-label text-md-right">Persona</label>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('persona_id') ? ' is-invalid' : '' }}" name="persona_id" id="persona_id" required>
                                @foreach($personas as $per)
                                    @if ($per->candidato == null)
                                        @if ($per->usuario == null)
                                            <option value="{{$per->id}}">{{$per->name}}</option>
                                        @endif
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

                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">Usuario</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control{{ $errors->has('usuario') ? ' is-invalid' : '' }}" name="usuario" value="{{ old('usuario') }}" required>

                                @if ($errors->has('usuario'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rol" class="col-md-4 col-form-label text-md-right">Rol</label>

                            <div class="col-md-6">
                                <input id="rol" type="text" class="form-control" name="rol" value="administrador" required disabled>
                                <!--select class="custom-select" name="rol" id="rol" required disabled>
                                     <option value="admin">Admin</option>
                                </select-->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        {{Form::hidden('rol', 'administrador')}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <a href="{{ url('/home') }}">Volver Atras</a>
</div>
@endsection
