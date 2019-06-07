@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registros</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row justify-content-center">
                            <div class="col-md-8 ">
                                <button type="button" class="btn btn-info btn-lg btn-block" onclick="location.href='persona/nuevo'">Registrar Persona</button>
                            </div>
                        </div><br>
                        <div class="row justify-content-center">
                            <div class="col-md-8 ">
                                <button type="button" class="btn btn-info btn-lg btn-block" onclick="location.href='persona'">Ver Registros</button>
                            </div>
                        </div><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
