@extends('layouts.app')

@section('content')
    @foreach ($comentarios as $comentario)
        <p>{{ $comentario->comentario }}</p>
        <br>
        <div class="d-flex align-items">
            <form action="{{ route('comentario.like') }}" id="form-js">
            <div id="count-js">{{ $comentario->likes->count() }} Like(s)</div>
            <input type="hidden" id="post-id-js" value="{{ $comentario->idC }}">
            <button type="submit" class="btn btn-link btn-sm">J'aime</button>
        </form>
        </div>
    @endforeach
@endsection
