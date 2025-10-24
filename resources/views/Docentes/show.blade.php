<!-- resources/views/aulas/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalles del Aula</h1>
    <p><strong>Nombre:</strong> {{ $aula->nombre }}</p>
    <p><strong>Capacidad:</strong> {{ $aula->capacidad }}</p>
    <p><strong>Ubicación:</strong> {{ $aula->ubicacion }}</p>

    <a href="{{ route('aulas.index') }}">Volver</a>
@endsection
