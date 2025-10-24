<!-- resources/views/aulas/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Aula</h1>
    <form method="POST" action="{{ route('aulas.update', $aula) }}">
        @csrf @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $aula->nombre }}" required>

        <label>Capacidad:</label>
        <input type="number" name="capacidad" value="{{ $aula->capacidad }}" required>

        <label>Ubicación:</label>
        <input type="text" name="ubicacion" value="{{ $aula->ubicacion }}" required>

        <button type="submit">Actualizar</button>
    </form>
@endsection
