@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ver Servicio</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('servicio.index') }}"> Volver</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                Nombre Servicio:
                {{ $servicio->nombreS }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                {{ $servicio->precio }}
            </div>
        </div>
    </div>
@endsection