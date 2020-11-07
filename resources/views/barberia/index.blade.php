@extends('administrador.masterpage')


@section('contenido')

@extends('layout')
<!--Se llama al layout-->

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Lista de barberias</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('barberias.create') }}"><img src="https://img.icons8.com/ios/24/000000/plus.png" /></a>
        </div>
    </div>
</div>

@if ($message = Session::get('exito'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered ">
    <tr>
        <th>ID</th>
        <th>nombre</th>
        <th>latitud</th>
        <th>longitud</th>
        <th>direccion</th>
        <th>propietario</th>
        <th>telefono</th>
        <th>horario</th>
        <th>Acciones</th>
    </tr>
    @foreach ($barberias as $barberia)
        <tr>
            <td>{{ $barberia->idB }}</td>
            <td>{{ $barberia->nombreB }}</td>
            <td>{{ $barberia->latitud }}</td>
            <td>{{ $barberia->longitud }}</td>
            <td>{{ $barberia->direccion }}</td>
            <td>{{ $barberia->propietario }}</td>
            <td>{{ $barberia->telefono }}</td>
            <td>{{ $barberia->horario }}</td>

        <td>
           <!--<form action="{{ route('barberias.destroy', $barberia->idB) }}" method="POST">


                <a class="btn btn-primary" href="{{ route('barberias.edit',$barberia->idB) }}"><img src="https://img.icons8.com/ios/24/000000/edit.png" /></a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"><img src="https://img.icons8.com/ios/24/000000/trash.png" /></button>
            </form> -->
        </td>
    </tr>
    @endforeach
</table>
<div class="links"> {{ $barberias->links() }} </div>
</div>
@endsection
@endsection
