@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar barberia</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('barberias.index') }}"> volver</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Error durante el procedimiento.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="map"></div>

    <input type="text" id="coords" />
<form action="{{ route('barberias.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre </strong>   
                <input type="text" name="nombreB" class="form-control" >
            </div>
            <div class="form-group">
                <strong>latitud</strong>   
                <input type="text" name="latitud" class="form-control" >
            </div>
            <div class="form-group">
                <strong>longitud</strong>   
                <input type="text" name="longitud" class="form-control" >
            </div>
            <div class="form-group">
                <strong>direccion</strong>   
                <input type="text" name="direccion" class="form-control" >
            </div>
            <div class="form-group">
                <strong>propietario</strong>   
                <input type="text" name="propietario" class="form-control" >
            </div>
            <div class="form-group">
                <strong>telefono</strong>   
                <input type="text" name="telefono" class="form-control" >
            </div>
            <div class="form-group">
                <strong>horario</strong>   
                <input type="text" name="horario" class="form-control" >
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>
   
</form>
@endsection