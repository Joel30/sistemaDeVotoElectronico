@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('persona_id') ? ' has-error' : '' }}">
                            <label for="persona_id" class="col-md-4 control-label">persona_id</label>

                            <div class="col-md-6">
                                <input id="persona_id" type="text" class="form-control" name="persona_id" value="{{ old('persona_id') }}" required autofocus>

                                @if ($errors->has('persona_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('persona_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usuario') ? ' has-error' : '' }}">
                            <label for="usuario" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control" name="usuario" value="{{ old('usuario') }}" required>

                                @if ($errors->has('usuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rol') ? ' has-error' : '' }}">
                            <label for="rol" class="col-md-4 control-label">Rol</label>

                            <div class="col-md-6">
                                <input id="rol" type="text" class="form-control" name="rol" value="{{ old('rol') }}" required>

                                @if ($errors->has('rol'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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
</div>
@endsection
