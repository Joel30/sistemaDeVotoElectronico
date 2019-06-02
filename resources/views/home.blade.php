@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registros</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-md-8 col-md-push-2">
                                <button type="button" class="btn btn-info btn-lg btn-block" onclick="location.href='/persona/nuevo'">Registrar Personas</button>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4 col-md-push-2">
                                <button type="button" class="btn btn-info btn-lg btn-block" onclick="location.href='/candidato/nuevo'">Registrar Candidato</button>
                            </div>
                            <div class="col-md-4 col-md-push-2">
                                <button type="button" class="btn btn-info btn-lg btn-block" onclick="location.href='/elector/nuevo'">Registrar Elector</button>
                            </div>
                        </div><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
