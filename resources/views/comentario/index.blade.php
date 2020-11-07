@extends('layout')
@section('content')
<div class="container">
<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de comentarios</h2>
            </div>
           
        </div>
    @foreach($comentarios as $comentario)

    <div class="card border-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body text-danger">
            <h5 class="card-title">{{ $comentario->usuarios()->pivot->nombre }}</h5>
            <p class="card-text">{{ $comentario->comentario}} </p>
        </div>
    </div>
</div>
@endforeach
@endsection