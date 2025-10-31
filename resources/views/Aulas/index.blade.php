@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="section-title text-center mb-5">Nuestras Aulas</h1>

    <div class="row">
        @foreach($aulas as $aula)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card card-aula h-100">
                <div class="card-img-top bg-secondary text-white text-center py-4">
                    <i class="fas fa-door-open fa-3x"></i>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $aula->nombre }}</h5>
                    <p class="card-text flex-grow-1">
                        <small class="text-muted">
                            <i class="fas fa-users me-2"></i>Capacidad: {{ $aula->capacidad }}<br>
                            <i class="fas fa-lightbulb me-2"></i>Focos: {{ $aula->focos }}<br>
                            <i class="fas fa-border-all me-2"></i>Cortinas: {{ $aula->cortinas }}<br>
                            <i class="fas fa-chair me-2"></i>Sillas: {{ $aula->sillas }}<br>
                            <i class="fas fa-table me-2"></i>Mesas: {{ $aula->mesas }}<br>
                            <i class="fas fa-snowflake me-2"></i>
                            {{ $aula->aire_acondicionado ? 'Con Aire Acondicionado' : 'Sin Aire Acondicionado' }}
                        </small>
                    </p>
                    <div class="mt-auto">
                        @if($aula->disponible)
                            <a href="{{ route('aulas.show', $aula->id) }}" class="btn btn-primary-custom w-100">
                                <i class="fas fa-eye me-2"></i>Ver Detalles
                            </a>
                        @else
                            <button class="btn btn-secondary w-100" disabled>
                                <i class="fas fa-clock me-2"></i>No Disponible
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection