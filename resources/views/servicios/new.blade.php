@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-14 margin-tb">
        <div class="pull-left">
            <h2>Agregar servicio</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('servicio.index') }}"> volver</a>
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
<form action="{{ route('servicio.store') }}" method="POST">
    @csrf

    <div class="form-group">
                                <h6>Nombre producto</h6>
                                <div class="col-md-12">
                                <input id="nombreP" name="nombreP" type="text" placeholder="Ingrese el nombre del producto" class="form-control input-md">
                                    </div>

                            <div class="form-group">
                              <h6>Precio</h6>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="precioP" name="precioP" placeholder="Ingresar precio producto" value="" maxlength="50" required="">
                                </div>
                            </div>





        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>

</form>
@endsection
