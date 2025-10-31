@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Header del Dashboard -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card card-aula">
                <div class="card-body text-center py-5">
                    <i class="fas fa-user-graduate fa-4x text-primary mb-3"></i>
                    <h1 class="display-5 fw-bold text-primary">Bienvenido, {{ Auth::user()->name }}</h1>
                    <p class="lead text-muted">Panel de Estudiante - Sistema de Aulas Inteligentes</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tarjetas de Acción Rápidas -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card card-aula text-center h-100">
                <div class="card-body p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-door-open fa-3x text-primary"></i>
                    </div>
                    <h4>Explorar Aulas</h4>
                    <p class="text-muted">Descubre todas las aulas disponibles y sus características</p>
                    <a href="{{ route('aulas.index') }}" class="btn btn-primary-custom mt-3">
                        <i class="fas fa-search me-2"></i>Ver Aulas
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-aula text-center h-100">
                <div class="card-body p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-calendar-check fa-3x text-success"></i>
                    </div>
                    <h4>Mis Reservas</h4>
                    <p class="text-muted">Gestiona tus reservas de aulas y horarios</p>
                    <a href="{{ route('reservas.index') }}" class="btn btn-success mt-3">
                        <i class="fas fa-list me-2"></i>Ver Reservas
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card card-aula text-center h-100">
                <div class="card-body p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-tasks fa-3x text-info"></i>
                    </div>
                    <h4>Mis Tareas</h4>
                    <p class="text-muted">Revisa y entrega tus tareas asignadas</p>
                    <a href="{{ route('tareas.index') }}" class="btn btn-info text-white mt-3">
                        <i class="fas fa-clipboard-list me-2"></i>Ver Tareas
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
                    <h5 class="mb-0"><i class="fas fa-id-card me-2"></i>Información del Perfil</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Nombre:</strong> {{ Auth::user()->name }}</p>
                            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Tipo de Usuario:</strong> 
                                <span class="badge bg-primary">Alumno</span>
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