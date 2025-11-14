
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">
                    <i class="fas fa-edit mr-2 text-yellow-500"></i>
                    Editar Aula: {{ $aula->nombre }}
                </h2>
                <a href="{{ route('aulas.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition">
                    <i class="fas fa-arrow-left mr-2"></i>Volver
                </a>
            </div>

            <form action="{{ route('aulas.update', $aula) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nombre -->
                    <div class="md:col-span-2">
                        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-chalkboard mr-2"></i>Nombre del Aula *
                        </label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $aula->nombre) }}" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('nombre')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Ubicación -->
                    <div class="md:col-span-2">
                        <label for="ubicacion" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-map-marker-alt mr-2"></i>Ubicación *
                        </label>
                        <input type="text" name="ubicacion" id="ubicacion" value="{{ old('ubicacion', $aula->ubicacion) }}" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('ubicacion')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Capacidad -->
                    <div>
                        <label for="capacidad" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-users mr-2"></i>Capacidad *
                        </label>
                        <input type="number" name="capacidad" id="capacidad" value="{{ old('capacidad', $aula->capacidad) }}" required min="1"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('capacidad')
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
                            <option value="activa" {{ $aula->estado == 'activa' ? 'selected' : '' }}>Activa</option>
                            <option value="inactiva" {{ $aula->estado == 'inactiva' ? 'selected' : '' }}>Inactiva</option>
                            <option value="mantenimiento" {{ $aula->estado == 'mantenimiento' ? 'selected' : '' }}>En Mantenimiento</option>
                        </select>
                        @error('estado')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Información de disponibilidades -->
                <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">
                        <i class="fas fa-info-circle mr-2"></i>Información Relacionada
                    </h4>
                    <p class="text-sm text-blue-700">
                        Esta aula tiene <strong>{{ $aula->disponibilidades->count() }}</strong> disponibilidades registradas.
                        Al editar el aula, las disponibilidades existentes se mantendrán.
                    </p>
                </div>

                <div class="mt-8 flex justify-end gap-4">
                    <a href="{{ route('aulas.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-lg transition">
                        <i class="fas fa-times mr-2"></i>Cancelar
                    </a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition">
                        <i class="fas fa-save mr-2"></i>Actualizar Aula
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
