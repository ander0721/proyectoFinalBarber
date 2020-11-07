@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ver Tipo de producto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tipo.index') }}"> Volver</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre tipo:</strong>
                {{ $tipo->nombreT }}
            </div>
        </div>
    
    </div>
@endsection