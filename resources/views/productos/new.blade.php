@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar producto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('producto.index') }}"> volver</a>
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
<form action="{{ route('producto.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre producto</strong>   
                <input type="text" name="nombreP" class="form-control" >
            </div>
            <div class="form-group">
                <strong>Precio:</strong>
                <input type="text" name="precioP" class="form-control" >
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>
   
</form>
@endsection