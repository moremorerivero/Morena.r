<div class="container-fluid py-4">
    <!-- Header con diseño mejorado -->
    <div class="hero-section mb-5">
        <div class="hero-overlay">
            <div class="container text-center">
                <h1 class="display-4 fw-bold mb-3 text-white">Gestión de Aulas</h1>
                <p class="lead mb-4 text-white-90">Administra todos los espacios educativos</p>
                
                <div class="d-flex gap-3 flex-wrap justify-content-center">
                    <a href="{{ route('aulas.create') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-plus me-2"></i>Nueva Aula
                    </a>
                    <a href="{{ route('home') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-arrow-left me-2"></i>Volver al Inicio
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtros y Búsqueda -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card card-modulo">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="mb-0 text-white">
                                <i class="fas fa-filter me-2"></i>Filtrar Aulas
                            </h5>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control bg-transparent text-white" 
                                   placeholder="Buscar aula..." id="searchInput">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grid de Aulas -->
    <div class="row" id="aulasGrid">
        @forelse($aulas as $aula)
        <div class="col-xl-4 col-lg-6 mb-4 aula-item">
            <div class="card card-aula h-100">
                <div class="card-header bg-transparent border-bottom-0 text-center py-4">
                    <div class="aula-icon">
                        <i class="fas fa-door-open fa-4x text-white"></i>
                    </div>
                    <h4 class="text-white mt-3 mb-0">{{ $aula->nombre }}</h4>
                    <span class="badge {{ $aula->disponible ? 'bg-success' : 'bg-secondary' }} mt-2">
                        {{ $aula->disponible ? 'Disponible' : 'No Disponible' }}
                    </span>
                </div>
                
                <div class="card-body">
                    <!-- Información del Aula -->
                    <div class="aula-info">
                        <div class="info-item">
                            <i class="fas fa-users text-primary"></i>
                            <span>Capacidad: <strong>{{ $aula->capacidad }}</strong></span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-lightbulb text-warning"></i>
                            <span>Focos: <strong>{{ $aula->focos }}</strong></span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-border-all text-success"></i>
                            <span>Cortinas: <strong>{{ $aula->cortinas }}</strong></span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-chair text-info"></i>
                            <span>Sillas: <strong>{{ $aula->sillas }}</strong></span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-table text-secondary"></i>
                            <span>Mesas: <strong>{{ $aula->mesas }}</strong></span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-snowflake text-primary"></i>
                            <span>Aire: <strong>{{ $aula->aire_acondicionado ? 'Sí' : 'No' }}</strong></span>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer bg-transparent border-top-0">
                    <div class="d-grid gap-2">
                        @if($aula->disponible)
                        <a href="{{ route('aulas.show', $aula->id) }}" class="btn btn-primary-custom">
                            <i class="fas fa-eye me-2"></i>Ver Detalles
                        </a>
                        @else
                        <button class="btn btn-secondary" disabled>
                            <i class="fas fa-clock me-2"></i>No Disponible
                        </button>
                        @endif
                        
                        <div class="btn-group w-100">
                            <a href="{{ route('aulas.edit', $aula->id) }}" class="btn btn-outline-light btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('aulas.destroy', $aula->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-light btn-sm" 
                                        onclick="return confirm('¿Estás seguro?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="card card-modulo text-center py-5">
                <div class="card-body">
                    <i class="fas fa-door-closed fa-4x text-white-50 mb-3"></i>
                    <h4 class="text-white">No hay aulas registradas</h4>
                    <p class="text-white-70">Comienza agregando tu primera aula</p>
                    <a href="{{ route('aulas.create') }}" class="btn btn-light">
                        <i class="fas fa-plus me-2"></i>Crear Primera Aula
                    </a>
                </div>
            </div>
        </div>
        @endforelse
    </div>

    <!-- Paginación -->
    @if($aulas->hasPages())
    <div class="row mt-4">
        <div class="col-12">
            <div class="card card-modulo">
                <div class="card-body">
                    {{ $aulas->links() }}
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<style>
    /* Estilos específicos para la página de aulas */
    .aula-icon {
        margin-bottom: 1rem;
    }

    .aula-info {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        padding: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        color: white;
    }

    .info-item i {
        width: 20px;
        text-align: center;
    }

    .card-aula {
        background: rgba(255, 255, 255, 0.15) !important;
        backdrop-filter: blur(10px) !important;
        border: 1px solid rgba(255, 255, 255, 0.18) !important;
        border-radius: 15px !important;
        transition: all 0.4s ease !important;
        color: white !important;
    }

    .card-aula:hover {
        transform: translateY(-10px) scale(1.02) !important;
        background: rgba(255, 255, 255, 0.25) !important;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3) !important;
    }

    /* Búsqueda en tiempo real */
    .aula-item {
        transition: all 0.3s ease;
    }

    .aula-item.hidden {
        display: none;
    }
</style>

<script>
    // Búsqueda en tiempo real
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const aulaItems = document.querySelectorAll('.aula-item');
        
        aulaItems.forEach(item => {
            const aulaName = item.querySelector('h4').textContent.toLowerCase();
            if (aulaName.includes(searchTerm)) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    });
</script>
