@extends('layouts.app')

@section('content')
    <!-- Mostrar mensaje de éxito -->
    @if(session('success'))
        <div class="container mt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endif

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1 class="display-4 fw-bold mb-4 text-white">Sistema de Aulas Inteligentes</h1>
                        <p class="lead mb-4 text-white-90">Gestión moderna de espacios educativos</p>
                        
                        @auth
                            <div class="welcome-card mx-auto">
                                <i class="fas fa-user-check me-2"></i>
                                <strong>¡Hola {{ Auth::user()->name }}!</strong> Bienvenido al sistema.
                            </div>
                        @else
                            <div class="d-flex gap-3 flex-wrap justify-content-center">
                                <a href="{{ route('login') }}" class="btn btn-light btn-lg">
                                    <i class="fas fa-sign-in-alt me-2"></i>Ingresar
                                </a>
                                <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">
                                    <i class="fas fa-user-plus me-2"></i>Registrarse
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Módulos Principales Section -->
    <section class="container my-5">
        <h2 class="section-title text-center mb-5">Módulos Principales</h2>
        <div class="row">
            <!-- Aulas -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card card-modulo h-100 text-center">
                    <div class="card-body p-4">
                        <div class="modulo-icon mb-3">
                            <i class="fas fa-door-open fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Aulas</h5>
                        <p class="card-text text-muted">Gestión de espacios educativos</p>
                        <a href="{{ url('/aulas-modulos') }}" class="btn btn-primary-custom btn-sm">
                            Ver Tipos de Aulas
                        </a>
                    </div>
                </div>
            </div>

            <!-- Docentes -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card card-modulo h-100 text-center">
                    <div class="card-body p-4">
                        <div class="modulo-icon mb-3">
                            <i class="fas fa-chalkboard-teacher fa-3x text-success"></i>
                        </div>
                        <h5 class="card-title">Docentes</h5>
                        <p class="card-text text-muted">Administración del personal</p>
                        <a href="{{ route('docentes.index') }}" class="btn btn-success btn-sm">
                            Acceder
                        </a>
                    </div>
                </div>
            </div>

            <!-- Estudiantes -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card card-modulo h-100 text-center">
                    <div class="card-body p-4">
                        <div class="modulo-icon mb-3">
                            <i class="fas fa-user-graduate fa-3x text-info"></i>
                        </div>
                        <h5 class="card-title">Estudiantes</h5>
                        <p class="card-text text-muted">Gestión estudiantil</p>
                        <a href="{{ route('alumnos.index') }}" class="btn btn-info btn-sm text-white">
                            Acceder
                        </a>
                    </div>
                </div>
            </div>

            <!-- Materias -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card card-modulo h-100 text-center">
                    <div class="card-body p-4">
                        <div class="modulo-icon mb-3">
                            <i class="fas fa-book-open fa-3x text-warning"></i>
                        </div>
                        <h5 class="card-title">Materias</h5>
                        <p class="card-text text-muted">Planificación académica</p>
                        <a href="{{ route('materias.index') }}" class="btn btn-warning btn-sm text-white">
                            Acceder
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dispositivos Inteligentes Section -->
    <section class="container my-5">
        <div class="card card-aula">
            <div class="card-header bg-light">
                <h3 class="section-title mb-0">Dispositivos Inteligentes</h3>
            </div>
            <div class="card-body p-4">
                <div class="row text-center">
                    <!-- Aire Acondicionado -->
                    <div class="col-md-4 mb-3">
                        <div class="dispositivo-item">
                            <i class="fas fa-snowflake fa-2x text-primary mb-2"></i>
                            <h6>Aire Acondicionado</h6>
                            <p class="text-muted small">Control inteligente de clima</p>
                            <a href="{{ route('aire.index') }}" class="btn btn-outline-primary btn-sm">
                                Gestionar
                            </a>
                        </div>
                    </div>

                    <!-- Focos -->
                    <div class="col-md-4 mb-3">
                        <div class="dispositivo-item">
                            <i class="fas fa-lightbulb fa-2x text-warning mb-2"></i>
                            <h6>Focos</h6>
                            <p class="text-muted small">Gestión de iluminación</p>
                            <a href="{{ route('focos.index') }}" class="btn btn-outline-warning btn-sm">
                                Gestionar
                            </a>
                        </div>
                    </div>

                    <!-- Cortinas -->
                    <div class="col-md-4 mb-3">
                        <div class="dispositivo-item">
                            <i class="fas fa-border-all fa-2x text-success mb-2"></i>
                            <h6>Cortinas</h6>
                            <p class="text-muted small">Control automático</p>
                            <a href="{{ route('cortinas.index') }}" class="btn btn-outline-success btn-sm">
                                Gestionar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección adicional para otros módulos -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card card-modulo-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                        <h6>Horarios</h6>
                        <a href="{{ route('horarios.index') }}" class="btn btn-outline-primary btn-sm">
                            Gestionar
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-modulo-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-calendar-check fa-2x text-success mb-2"></i>
                        <h6>Reservas</h6>
                        <a href="{{ route('reservas.index') }}" class="btn btn-outline-success btn-sm">
                            Gestionar
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-modulo-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-tasks fa-2x text-info mb-2"></i>
                        <h6>Tareas</h6>
                        <a href="{{ route('tareas.index') }}" class="btn btn-outline-info btn-sm">
                            Gestionar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection