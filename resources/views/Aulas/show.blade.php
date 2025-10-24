@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="section-title">{{ $aula->nombre }}</h1>
            <p class="lead">{{ $aula->descripcion }}</p>
            <div class="mb-4">
                <h5>Equipamiento:</h5>
                @foreach(json_decode($aula->equipamiento) as $equipo)
                    <span class="badge bg-primary">{{ $equipo }}</span>
                @endforeach
            </div>
            <div class="mb-4">
                <h5>Capacidad: {{ $aula->capacidad }} personas</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-aula">
                <div class="card-body">
                    <h5 class="card-title">Reservar</h5>
                    @if($aula->disponible)
                        <p class="text-success">Disponible</p>
                        <a href="{{ route('reservas.create', $aula->id) }}" class="btn btn-primary-custom w-100">Reservar</a>
                    @else
                        <p class="text-danger">No Disponible</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection