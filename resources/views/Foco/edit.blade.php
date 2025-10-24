@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar {{ ucfirst($titulo) }}</h1>

    <form action="{{ route($ruta . '.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Campos con valores precargados --}}
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $item->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control">{{ $item->descripcion }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route($ruta . '.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
