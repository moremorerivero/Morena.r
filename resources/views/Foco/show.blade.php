@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de {{ ucfirst($titulo) }}</h1>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $item->nombre }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $item->descripcion }}</li>
    </ul>

    <a href="{{ route($ruta . '.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
