@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">
                    <i class="fas fa-plus-circle mr-2 text-green-500"></i>
                    Crear Nueva Disponibilidad
                </h2>
                <a href="{{ route('disponibilidades.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition">
                    <i class="fas fa-arrow-left mr-2"></i>Volver
                </a>
            </div>

            <form action="{{ route('disponibilidades.store') }}" method="POST">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Selección de Aula -->
                    <div class="md:col-span-2">
                        <label for="aula_id" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-chalkboard mr-2"></i>Aula *
                        </label>
                        <select name="aula_id" id="aula_id" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Selecciona un aula</option>
                            @foreach($aulas as $aula)
                                <option value="{{ $aula->id }}" 
                                    {{ old('aula_id', request('aula_id')) == $aula->id ? 'selected' : '' }}>
                                    {{ $aula->nombre }} - {{ $aula->ubicacion }} (Cap: {{ $aula->capacidad }})
                                </option>
                            @endforeach
                        </select>
                        @error('aula_id')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Fecha -->
                    <div>
                        <label for="fecha" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-calendar mr-2"></i>Fecha *
                        </label>
                        <input type="date" name="fecha" id="fecha" value="{{ old('fecha', date('Y-m-d')) }}" required
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
                        <input type="time" name="hora" id="hora" value="{{ old('hora', '08:00') }}" required
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
                            <option value="disponible" {{ old('estado') == 'disponible' ? 'selected' : '' }}>Disponible</option>
                            <option value="ocupada" {{ old('estado') == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
                            <option value="mantenimiento" {{ old('estado') == 'mantenimiento' ? 'selected' : '' }}>Mantenimiento</option>
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
                        <input type="text" name="identificacion" id="identificacion" value="{{ old('identificacion') }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Ej: MAT001, CURSO_ESPECIAL, etc.">
                        @error('identificacion')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <p class="text-xs text-gray-500 mt-1">Opcional: Identificador único para esta disponibilidad</p>
                    </div>
                </div>

                <!-- Información de Relación -->
                <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">
                        <i class="fas fa-info-circle mr-2"></i>Información de Relación
                    </h4>
                    <p class="text-sm text-blue-700">
                        Estás creando una <strong>disponibilidad</strong> que pertenecerá a un <strong>aula</strong> específica.
                        Recuerda que una aula puede tener muchas disponibilidades en diferentes fechas y horarios.
                    </p>
                </div>

                <div class="mt-8 flex justify-end gap-4">
                    <button type="reset" class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-lg transition">
                        <i class="fas fa-redo mr-2"></i>Limpiar
                    </button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition">
                        <i class="fas fa-save mr-2"></i>Guardar Disponibilidad
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

        // Cambiar dinámicamente el placeholder según el aula seleccionada
        const aulaSelect = document.getElementById('aula_id');
        const identificacionInput = document.getElementById('identificacion');
        
        aulaSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            if (selectedOption.value !== '') {
                const aulaName = selectedOption.text.split(' - ')[0];
                identificacionInput.placeholder = `Ej: ${aulaName.toUpperCase()}_MATUTINO`;
            }
        });
    });
</script>
@endsection