@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">
                    <i class="fas fa-edit mr-2 text-yellow-500"></i>
                    Editar Disponibilidad
                </h2>
                <a href="{{ route('disponibilidades.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition">
                    <i class="fas fa-arrow-left mr-2"></i>Volver
                </a>
            </div>

            <form action="{{ route('disponibilidades.update', $disponibilidad) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Información del Aula (solo lectura) -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-chalkboard mr-2"></i>Aula Asignada
                        </label>
                        <div class="p-3 bg-gray-50 rounded-md border border-gray-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-semibold text-gray-800">{{ $disponibilidad->aula->nombre }}</p>
                                    <p class="text-sm text-gray-600">{{ $disponibilidad->aula->ubicacion }}</p>
                                </div>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">
                                    Capacidad: {{ $disponibilidad->aula->capacidad }}
                                </span>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">No se puede cambiar el aula de una disponibilidad existente</p>
                    </div>

                    <!-- Fecha -->
                    <div>
                        <label for="fecha" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-calendar mr-2"></i>Fecha *
                        </label>
                        <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $disponibilidad->fecha) }}" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('fecha')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Hora -->
                    <div>
                        <label for="hora" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-clock mr-2"></i>Hora *
                        </label>
                        <input type="time" name="hora" id="hora" value="{{ old('hora', $disponibilidad->hora) }}" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('hora')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Estado -->
                    <div>
                        <label for="estado" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-info-circle mr-2"></i>Estado *
                        </label>
                        <select name="estado" id="estado" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="disponible" {{ old('estado', $disponibilidad->estado) == 'disponible' ? 'selected' : '' }}>Disponible</option>
                            <option value="ocupada" {{ old('estado', $disponibilidad->estado) == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
                            <option value="mantenimiento" {{ old('estado', $disponibilidad->estado) == 'mantenimiento' ? 'selected' : '' }}>Mantenimiento</option>
                        </select>
                        @error('estado')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Identificación -->
                    <div class="md:col-span-2">
                        <label for="identificacion" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-id-card mr-2"></i>Identificación
                        </label>
                        <input type="text" name="identificacion" id="identificacion" value="{{ old('identificacion', $disponibilidad->identificacion) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Ej: MAT001, CURSO_ESPECIAL, etc.">
                        @error('identificacion')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Información de la Relación -->
                <div class="mt-6 p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">
                        <i class="fas fa-link mr-2"></i>Relación Actual
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="font-medium text-gray-700">Aula:</span>
                            <p class="text-green-700">{{ $disponibilidad->aula->nombre }}</p>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Ubicación:</span>
                            <p class="text-green-700">{{ $disponibilidad->aula->ubicacion }}</p>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Capacidad:</span>
                            <p class="text-green-700">{{ $disponibilidad->aula->capacidad }} personas</p>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Estado del Aula:</span>
                            <span class="bg-{{ $disponibilidad->aula->estado == 'activa' ? 'green' : 'red' }}-100 text-{{ $disponibilidad->aula->estado == 'activa' ? 'green' : 'red' }}-800 px-2 py-1 rounded text-xs">
                                {{ $disponibilidad->aula->estado }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-end gap-4">
                    <a href="{{ route('disponibilidades.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-lg transition">
                        <i class="fas fa-times mr-2"></i>Cancelar
                    </a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition">
                        <i class="fas fa-save mr-2"></i>Actualizar Disponibilidad
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Establecer fecha mínima como hoy
        const fechaInput = document.getElementById('fecha');
        const today = new Date().toISOString().split('T')[0];
        fechaInput.min = today;
    });
</script>
@endsection