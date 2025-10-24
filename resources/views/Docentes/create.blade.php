<!-- resources/views/aulas/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Crear Aula</h1>
    <form method="POST" action="{{ route('aulas.store') }}">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Capacidad:</label>
        <input type="number" name="capacidad" required>

        <label>Ubicación:</label>
        <input type="text" name="ubicacion" required>

        <button type="submit">Guardar</button>
    </form>
@endsection
