@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar servicio</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('servicio.index') }}"> volver</a>
        </div>
    </div>
</div>
   


<form action="{{ route('servicio.update', $servicio->idS) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                Nombre servicio:  
                <input type="text" name="nombreS" class="form-control" value="{{ $servicio->nombreS }}">
            </div>
            <div class="form-group">
                Precio:
                <input type="text" name="precio" class="form-control" value="{{ $servicio->precio}}">
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </div>
   
</form>
@endsection