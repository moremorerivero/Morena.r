@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card card-aula shadow-lg border-0">
                <div class="card-header bg-success text-white text-center py-4 border-0">
                    <i class="fas fa-user-plus fa-3x mb-3"></i>
                    <h2 class="h3 mb-0">Crear Cuenta</h2>
                    <p class="mb-0 opacity-75">Únete a nuestra plataforma</p>
                </div>
                
                <div class="card-body p-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">
                                <i class="fas fa-user me-2 text-primary"></i>Nombre Completo
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="fas fa-id-card text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-0" id="name" name="name" 
                                       value="{{ old('name') }}" placeholder="Tu nombre completo" required>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">
                                <i class="fas fa-envelope me-2 text-primary"></i>Correo Electrónico
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="fas fa-at text-muted"></i>
                                </span>
                                <input type="email" class="form-control border-start-0 ps-0" id="email" name="email" 
                                       value="{{ old('email') }}" placeholder="tu@email.com" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="tipo" class="form-label fw-semibold">
                                <i class="fas fa-users me-2 text-primary"></i>Tipo de Usuario
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="fas fa-user-tag text-muted"></i>
                                </span>
                                <select class="form-select border-start-0 ps-0" id="tipo" name="tipo" required>
                                    <option value="">Selecciona tu perfil...</option>
                                    <option value="alumno" {{ old('tipo') == 'alumno' ? 'selected' : '' }}>
                                        👨‍🎓 Alumno
                                    </option>
                                    <option value="profesor" {{ old('tipo') == 'profesor' ? 'selected' : '' }}>
                                        👨‍🏫 Profesor
                                    </option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">
                                <i class="fas fa-lock me-2 text-primary"></i>Contraseña
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="fas fa-key text-muted"></i>
                                </span>
                                <input type="password" class="form-control border-start-0 ps-0" id="password" 
                                       name="password" placeholder="Mínimo 6 caracteres" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">
                                <i class="fas fa-lock me-2 text-primary"></i>Confirmar Contraseña
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="fas fa-key text-muted"></i>
                                </span>
                                <input type="password" class="form-control border-start-0 ps-0" id="password_confirmation" 
                                       name="password_confirmation" placeholder="Repite tu contraseña" required>
                            </div>
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-success btn-lg py-3">
                                <i class="fas fa-user-plus me-2"></i>Crear Mi Cuenta
                            </button>
                        </div>

                        <div class="text-center">
                            <p class="mb-0 text-muted">
                                ¿Ya tienes cuenta? 
                                <a href="{{ route('login') }}" class="text-primary fw-semibold text-decoration-none">
                                    Inicia sesión aquí
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection