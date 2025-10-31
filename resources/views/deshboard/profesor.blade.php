@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Header del Dashboard -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card card-aula">
                <div class="card-body text-center py-5">
                    <i class="fas fa-chalkboard-teacher fa-4x text-success mb-3"></i>
                    <h1 class="display-5 fw-bold text-success">Bienvenido, Prof. {{ Auth::user()->name }}</h1>
                    <p class="lead text-muted">Panel Docente - Sistema de Aulas Inteligentes</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tarjetas de Acción Rápidas -->
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card card-aula text-center h-100">
                <div class="card-body p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-door-open fa-2x text-primary"></i>
                    </div>
                    <h5>Gestionar Aulas</h5>
                    <p class="text-muted small">Ver y administrar aulas disponibles</p>
                    <a href="{{ route('aulas.index') }}" class="btn btn-primary-custom btn-sm mt-2">
                        <i class="fas fa-cog me-1"></i>Gestionar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card card-aula text-center h-100">
                <div class="card-body p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-calendar-plus fa-2x text-success"></i>
                    </div>
                    <h5>Crear Reservas</h5>
                    <p class="text-muted small">Reservar aulas para clases</p>
                    <a href="{{ route('reservas.create') }}" class="btn btn-success btn-sm mt-2">
                        <i class="fas fa-plus me-1"></i>Reservar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card card-aula text-center h-100">
                <div class="card-body p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-tasks fa-2x text-warning"></i>
                    </div>
                    <h5>Asignar Tareas</h5>
                    <p class="text-muted small">Crear y gestionar tareas</p>
                    <a href="{{ route('tareas.create') }}" class="btn btn-warning btn-sm mt-2 text-white">
                        <i class="fas fa-plus me-1"></i>Crear
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card card-aula text-center h-100">
                <div class="card-body p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-chart-bar fa-2x text-info"></i>
                    </div>
                    <h5>Reportes</h5>
                    <p class="text-muted small">Ver reportes y estadísticas</p>
                    <a href="#" class="btn btn-info btn-sm mt-2">
                        <i class="fas fa-chart-line me-1"></i>Ver
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Información del Perfil -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card card-aula">
                <div class="card-header bg-light">
                    <h5 class="mb-0"><i class="fas fa-id-card me-2"></i>Información del Perfil Docente</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Nombre:</strong> Prof. {{ Auth::user()->name }}</p>
                            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Tipo de Usuario:</strong> 
                                <span class="badge bg-success">Profesor</span>
                            </p>
                            <p><strong>Miembro desde:</strong> {{ Auth::user()->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection