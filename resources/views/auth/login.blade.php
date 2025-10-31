@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card card-aula shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4 border-0">
                    <i class="fas fa-user-graduate fa-3x mb-3"></i>
                    <h2 class="h3 mb-0">Iniciar Sesión</h2>
                    <p class="mb-0 opacity-75">Accede a tu cuenta</p>
                </div>
                
                <div class="card-body p-5">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Error:</strong> Verifica tus credenciales
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
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
                            <label for="password" class="form-label fw-semibold">
                                <i class="fas fa-lock me-2 text-primary"></i>Contraseña
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="fas fa-key text-muted"></i>
                                </span>
                                <input type="password" class="form-control border-start-0 ps-0" id="password" 
                                       name="password" placeholder="••••••••" required>
                                <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary-custom btn-lg py-3">
                                <i class="fas fa-sign-in-alt me-2"></i>Ingresar al Sistema
                            </button>
                        </div>

                        <div class="text-center">
                            <p class="mb-0 text-muted">
                                ¿No tienes cuenta? 
                                <a href="{{ route('register') }}" class="text-primary fw-semibold text-decoration-none">
                                    Regístrate aquí
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const icon = event.currentTarget.querySelector('i');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.className = 'fas fa-eye-slash';
    } else {
        passwordInput.type = 'password';
        icon.className = 'fas fa-eye';
    }
}
</script>
@endsection