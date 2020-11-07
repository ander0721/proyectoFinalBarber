@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar barberia </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('barberias.index') }}"> volver</a>
        </div>
    </div>
</div>
   


<form action="{{ route('barberias.update', $barberia->idB) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          
            <div class="form-group">
                <strong>Nombre </strong>   
                <input type="text" name="nombreB" class="form-control" value="{{ $barberia->nombreB }} ">
            </div>
            <div class="form-group">
                <strong>latitud</strong>   
                <input type="text" name="latitud" class="form-control"  value="{{ $barberia->latitud }} ">
            </div>
            <div class="form-group">
                <strong>longitud</strong>   
                <input type="text" name="longitud" class="form-control" value="{{ $barberia->longitud }} " >
            </div>
            <div class="form-group">
                <strong>direccion</strong>   
                <input type="text" name="direccion" class="form-control" value="{{ $barberia->direccion }} " >
            </div>
            <div class="form-group">
                <strong>propietario</strong>   
                <input type="text" name="propietario" class="form-control" value="{{ $barberia->propietario }} " >
            </div>
            <div class="form-group">
                <strong>telefono</strong>   
                <input type="text" name="telefono" class="form-control"  value="{{ $barberia->telefono }} " >
            </div>
            <div class="form-group">
                <strong>horario</strong>   
                <input type="text" name="horario" class="form-control" value="{{ $barberia->horario }} " >
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </div>
   
</form>
@endsection