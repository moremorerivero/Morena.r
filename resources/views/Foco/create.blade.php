@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear {{ ucfirst($titulo) }}</h1>

    <form action="{{ route($ruta . '.store') }}" method="POST">
        @csrf
        
        {{-- Ejemplo de campos, cámbialos según la entidad --}}
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route($ruta . '.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
