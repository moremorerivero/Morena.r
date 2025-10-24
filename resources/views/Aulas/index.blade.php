@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="section-title">Nuestras Aulas</h1>
    <div class="row">
        @foreach($aulas as $aula)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card card-aula h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $aula->nombre }}</h5>
                    <p class="card-text flex-grow-1">
                        <small class="text-muted">
                            <i class="fas fa-users me-2"></i>Capacidad: {{ $aula->capacidad }}<br>
                            <i class="fas fa-tools me-2"></i>
                            @foreach(json_decode($aula->equipamiento) as $equipo)
                                <span class="badge bg-secondary">{{ $equipo }}</span>
                            @endforeach
                        </small>
                    </p>
                    <div class="mt-auto">
                        <a href="{{ route('aulas.show', $aula->id) }}" class="btn btn-primary-custom w-100">
                            <i class="fas fa-eye me-2"></i>Ver Detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection