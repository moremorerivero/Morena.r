@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">
                <i class="fas fa-calendar-check mr-3 text-green-500"></i>
                Detalles de Disponibilidad
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('disponibilidades.edit', $disponibilidad) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition">
                    <i class="fas fa-edit mr-2"></i>Editar
                </a>
                <a href="{{ route('disponibilidades.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition">
                    <i class="fas fa-arrow-left mr-2"></i>Volver
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Información Principal -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-6 text-gray-800 border-b-2 border-blue-500 pb-2">
                        Información de la Disponibilidad
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Columna Izquierda -->
                        <div class="space-y-6">
                            <!-- Fecha y Hora -->
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-2">Fecha y Hora</label>
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center text-gray-700">
                                        <i class="fas fa-calendar text-green-500 mr-2"></i>
                                        <span class="font-semibold">{{ $disponibilidad->fecha }}</span>
                                    </div>
                                    <div class="flex items-center text-gray-700">
                                        <i class="fas fa-clock text-purple-500 mr-2"></i>
                                        <span class="font-semibold">{{ substr($disponibilidad->hora, 0, 5) }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Estado -->
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-2">Estado</label>
                                <span class="inline-flex items-center px-3 py-2 rounded-full text-sm font-medium bg-{{ $disponibilidad->estado == 'disponible' ? 'green' : ($disponibilidad->estado == 'ocupada' ? 'red' : 'yellow') }}-100 text-{{ $disponibilidad->estado == 'disponible' ? 'green' : ($disponibilidad->estado == 'ocupada' ? 'red' : 'yellow') }}-800">
                                    <i class="fas fa-circle mr-2 text-{{ $disponibilidad->estado == 'disponible' ? 'green' : ($disponibilidad->estado == 'ocupada' ? 'red' : 'yellow') }}-500"></i>
                                    {{ ucfirst($disponibilidad->estado) }}
                                </span>
                            </div>
                        </div>

                        <!-- Columna Derecha -->
                        <div class="space-y-6">
                            <!-- Identificación -->
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-2">Identificación</label>
                                @if($disponibilidad->identificacion)
                                    <div class="flex items-center">
                                        <i class="fas fa-id-card text-blue-500 mr-2"></i>
                                        <span class="font-semibold text-gray-800">{{ $disponibilidad->identificacion }}</span>
                                    </div>
                                @else
                                    <span class="text-gray-400 italic">No especificada</span>
                                @endif
                            </div>

                            <!-- Fechas de Registro -->
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-2">Registro</label>
                                <div class="space-y-1 text-sm text-gray-600">
                                    <div class="flex justify-between">
                                        <span>Creado:</span>
                                        <span>{{ $disponibilidad->created_at->format('d/m/Y H:i') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Actualizado:</span>
                                        <span>{{ $disponibilidad->updated_at->format('d/m/Y H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Información del Aula -->
                <div class="mt-6 bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b-2 border-blue-500 pb-2">
                        Aula Asignada
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-500">Nombre del Aula</label>
                                <p class="mt-1 text-lg font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-chalkboard mr-2 text-blue-500"></i>
                                    {{ $disponibilidad->aula->nombre }}
                                </p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500">Ubicación</label>
                                <p class="mt-1 text-lg font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-map-marker-alt mr-2 text-red-500"></i>
                                    {{ $disponibilidad->aula->ubicacion }}
                                </p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-500">Capacidad</label>
                                <p class="mt-1 text-lg font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-users mr-2 text-green-500"></i>
                                    {{ $disponibilidad->aula->capacidad }} personas
                                </p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500">Estado del Aula</label>
                                <span class="mt-1 inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-{{ $disponibilidad->aula->estado == 'activa' ? 'green' : 'red' }}-100 text-{{ $disponibilidad->aula->estado == 'activa' ? 'green' : 'red' }}-800">
                                    {{ $disponibilidad->aula->estado }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-center">
                        <a href="{{ route('aulas.show', $disponibilidad->aula) }}" 
                           class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg transition flex items-center">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Ver Detalles Completo del Aula
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar - Información de Relación -->
            <div class="space-y-6">
                <!-- Diagrama de Relación -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b-2 border-blue-500 pb-2">
                        Diagrama de Relación
                    </h3>
                    
                    <div class="space-y-4">
                        <!-- Aula -->
                        <div class="p-4 bg-blue-50 rounded-lg border-2 border-blue-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-semibold text-blue-800">AULA</p>
                                    <p class="text-sm text-blue-600">Modelo Principal</p>
                                </div>
                                <i class="fas fa-chalkboard text-blue-500 text-xl"></i>
                            </div>
                            <div class="mt-2 text-xs text-blue-700">
                                <p>• nombre</p>
                                <p>• ubicacion</p>
                                <p>• capacidad</p>
                                <p>• estado</p>
                            </div>
                        </div>

                        <!-- Flecha de relación -->
                        <div class="flex justify-center">
                            <i class="fas fa-arrow-down text-gray-400 text-2xl"></i>
                        </div>

                        <!-- Disponibilidad -->
                        <div class="p-4 bg-green-50 rounded-lg border-2 border-green-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-semibold text-green-800">DISPONIBILIDAD</p>
                                    <p class="text-sm text-green-600">Modelo Relacionado</p>
                                </div>
                                <i class="fas fa-calendar-alt text-green-500 text-xl"></i>
                            </div>
                            <div class="mt-2 text-xs text-green-700">
                                <p>• aula_id (FK)</p>
                                <p>• fecha</p>
                                <p>• hora</p>
                                <p>• estado</p>
                                <p>• identificacion</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 p-3 bg-purple-50 rounded-lg">
                        <p class="text-sm text-purple-700 text-center">
                            <strong>Relación:</strong> 1 Aula → Múltiples Disponibilidades
                        </p>
                    </div>
                </div>

                <!-- Acciones Rápidas -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b-2 border-blue-500 pb-2">
                        Acciones Rápidas
                    </h3>
                    
                    <div class="space-y-3">
                        <a href="{{ route('disponibilidades.create', ['aula_id' => $disponibilidad->aula_id]) }}" 
                           class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-lg transition flex items-center justify-center">
                            <i class="fas fa-plus-circle mr-2"></i>Nueva Disponibilidad para esta Aula
                        </a>
                        
                        <a href="{{ route('aulas.show', $disponibilidad->aula) }}" 
                           class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg transition flex items-center justify-center">
                            <i class="fas fa-chalkboard mr-2"></i>Ver Aula Principal
                        </a>

                        <form action="{{ route('disponibilidades.destroy', $disponibilidad) }}" method="POST" class="w-full">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="w-full bg-red-500 hover:bg-red-600 text-white px-4 py-3 rounded-lg transition flex items-center justify-center"
                                    onclick="return confirm('¿Estás seguro de eliminar esta disponibilidad?')">
                                <i class="fas fa-trash mr-2"></i>Eliminar Disponibilidad
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection