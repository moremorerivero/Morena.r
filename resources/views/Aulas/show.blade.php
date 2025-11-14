<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-aula">
                <div class="card-body">
                    <h1 class="section-title">{{ $aula->nombre }}</h1>
                    <p class="lead">{{ $aula->descripcion }}</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5>Características:</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-users me-2 text-primary"></i> Capacidad: {{ $aula->capacidad }} personas</li>
                                <li><i class="fas fa-lightbulb me-2 text-primary"></i> Focos: {{ $aula->focos }}</li>
                                <li><i class="fas fa-border-all me-2 text-primary"></i> Cortinas: {{ $aula->cortinas }}</li>
                                <li><i class="fas fa-chair me-2 text-primary"></i> Sillas: {{ $aula->sillas }}</li>
                                <li><i class="fas fa-table me-2 text-primary"></i> Mesas: {{ $aula->mesas }}</li>
                                <li><i class="fas fa-snowflake me-2 text-primary"></i> 
                                    Aire Acondicionado: {{ $aula->aire_acondicionado ? 'Sí' : 'No' }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5>Estado:</h5>
                            <div class="alert {{ $aula->disponible ? 'alert-success' : 'alert-warning' }}">
                                <i class="fas {{ $aula->disponible ? 'fa-check-circle' : 'fa-clock' }} me-2"></i>
                                {{ $aula->disponible ? 'Disponible para reservar' : 'No disponible temporalmente' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card card-aula">
                <div class="card-body">
                    <h5>Acciones</h5>
                    @auth
                        @if($aula->disponible)
                            <button class="btn btn-primary-custom w-100 mb-2" id="btnReservar">
                                <i class="fas fa-calendar-plus me-2"></i>Reservar Aula
                            </button>
                        @else
                            <button class="btn btn-secondary w-100 mb-2" disabled>
                                <i class="fas fa-clock me-2"></i>No Disponible
                            </button>
                        @endif
                        
                        <a href="{{ route('tareas.index') }}?aula={{ $aula->id }}" class="btn btn-outline-primary w-100 mb-2">
                            <i class="fas fa-tasks me-2"></i>Ver Tareas
                        </a>
                    @else
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Debes <a href="{{ route('login') }}">iniciar sesión</a> para reservar esta aula.
                        </div>
                    @endauth
                    
                    <a href="{{ route('aulas.index') }}" class="btn btn-outline-secondary w-100">
                        <i class="fas fa-arrow-left me-2"></i>Volver a Aulas
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
