<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Disponibilidades</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <header class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold text-gray-800">
                    <i class="fas fa-calendar-alt mr-3 text-green-500"></i>
                    Gestión de Disponibilidades
                </h1>
                <div class="flex gap-4">
                    <a href="{{ route('aulas.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                        <i class="fas fa-chalkboard mr-2"></i>Ver Aulas
                    </a>
                    <a href="{{ route('disponibilidades.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition">
                        <i class="fas fa-plus mr-2"></i>Nueva Disponibilidad
                    </a>
                </div>
            </div>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Sidebar Izquierdo -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Filtros -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b-2 border-blue-500 pb-2">
                        Filtros
                    </h3>
                    
                    <form method="GET" action="{{ route('disponibilidades.index') }}">
                        <!-- Filtro por Aula -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Aula</label>
                            <select name="aula_id" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Todas las aulas</option>
                                @foreach($aulas as $aula)
                                    <option value="{{ $aula->id }}" {{ request('aula_id') == $aula->id ? 'selected' : '' }}>
                                        {{ $aula->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Filtro por Estado -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Estado</label>
                            <select name="estado" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Todos los estados</option>
                                <option value="disponible" {{ request('estado') == 'disponible' ? 'selected' : '' }}>Disponible</option>
                                <option value="ocupada" {{ request('estado') == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
                                <option value="mantenimiento" {{ request('estado') == 'mantenimiento' ? 'selected' : '' }}>Mantenimiento</option>
                            </select>
                        </div>

                        <!-- Filtro por Fecha -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Fecha</label>
                            <input type="date" name="fecha" value="{{ request('fecha') }}" 
                                   class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div class="flex gap-2">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex-1 transition">
                                <i class="fas fa-filter mr-2"></i>Filtrar
                            </button>
                            <a href="{{ route('disponibilidades.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded transition">
                                <i class="fas fa-redo mr-2"></i>
                            </a>
                        </div>
                    </form>
                </div>

                <!-- Estadísticas -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b-2 border-blue-500 pb-2">
                        Estadísticas
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Total:</span>
                            <span class="font-bold text-blue-600">{{ $disponibilidades->total() }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Disponibles:</span>
                            <span class="font-bold text-green-600">
                                {{ $disponibilidades->where('estado', 'disponible')->count() }}
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Ocupadas:</span>
                            <span class="font-bold text-red-600">
                                {{ $disponibilidades->where('estado', 'ocupada')->count() }}
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Hoy:</span>
                            <span class="font-bold text-purple-600">
                                {{ $disponibilidades->where('fecha', today())->count() }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenido Principal -->
            <div class="lg:col-span-3">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold text-gray-800 border-b-2 border-blue-500 pb-2">
                            Lista de Disponibilidades
                        </h3>
                        <div class="text-sm text-gray-600">
                            Mostrando {{ $disponibilidades->count() }} de {{ $disponibilidades->total() }} registros
                        </div>
                    </div>

                    @if($disponibilidades->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-4 py-3 text-left">Aula</th>
                                    <th class="px-4 py-3 text-left">Fecha</th>
                                    <th class="px-4 py-3 text-left">Hora</th>
                                    <th class="px-4 py-3 text-left">Estado</th>
                                    <th class="px-4 py-3 text-left">Identificación</th>
                                    <th class="px-4 py-3 text-left">Creado</th>
                                    <th class="px-4 py-3 text-left">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($disponibilidades as $disp)
                                <tr class="border-b hover:bg-gray-50 transition">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-chalkboard text-blue-500 mr-2"></i>
                                            {{ $disp->aula->nombre }}
                                        </div>
                                        <div class="text-xs text-gray-500">{{ $disp->aula->ubicacion }}</div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-calendar text-green-500 mr-2"></i>
                                            {{ $disp->fecha }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <i class="fas fa-clock text-purple-500 mr-2"></i>
                                            {{ substr($disp->hora, 0, 5) }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <span class="bg-{{ $disp->estado == 'disponible' ? 'green' : ($disp->estado == 'ocupada' ? 'red' : 'yellow') }}-100 text-{{ $disp->estado == 'disponible' ? 'green' : ($disp->estado == 'ocupada' ? 'red' : 'yellow') }}-800 px-2 py-1 rounded text-xs font-medium">
                                            {{ $disp->estado }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        @if($disp->identificacion)
                                            <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">
                                                {{ $disp->identificacion }}
                                            </span>
                                        @else
                                            <span class="text-gray-400 text-xs">N/A</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-500">
                                        {{ $disp->created_at->format('d/m/Y') }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex gap-2">
                                            <a href="{{ route('disponibilidades.show', $disp) }}" class="text-blue-500 hover:text-blue-700" title="Ver detalles">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('disponibilidades.edit', $disp) }}" class="text-green-500 hover:text-green-700" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('disponibilidades.destroy', $disp) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700" 
                                                        onclick="return confirm('¿Eliminar esta disponibilidad?')" title="Eliminar">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Paginación -->
                    @if($disponibilidades->hasPages())
                    <div class="mt-6">
                        {{ $disponibilidades->links() }}
                    </div>
                    @endif

                    @else
                    <div class="text-center py-12">
                        <i class="fas fa-calendar-times text-6xl text-gray-300 mb-4"></i>
                        <h4 class="text-xl font-semibold text-gray-500 mb-2">No hay disponibilidades registradas</h4>
                        <p class="text-gray-400 mb-6">Comienza agregando la primera disponibilidad</p>
                        <a href="{{ route('disponibilidades.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg transition inline-flex items-center">
                            <i class="fas fa-plus mr-2"></i>Crear Primera Disponibilidad
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Efectos hover para filas de la tabla
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.01)';
                    this.style.transition = 'all 0.2s ease';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>
</html>