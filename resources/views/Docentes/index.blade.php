<!-- resources/views/aulas/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Listado de Docentes</h1>
    <a href="{{ route('.creadocentete') }}">Crear nuevo Docente</a>
    <ul>
        @foreach ($docente as $docente)
            <li>
                {{ $aula->nombre }} (Capacidad: {{ $aula->capacidad }})
                <a href="{{ route('docente.show', $docente) }}">Ver</a>
                <a href="{{ route('docente.edit', $docente) }}">Editar</a>
                <form action="{{ route('docente.destroy', $docente) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
