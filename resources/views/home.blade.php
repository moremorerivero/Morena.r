@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <!-- Hero Section -->
    <div class="text-center text-white mb-12">
        <h1 class="text-5xl font-bold mb-4">Sistema de Aulas Inteligentes</h1>
        <p class="text-xl opacity-90">Gestión moderna de espacios educativos</p>
    </div>

    <!-- Categorías Deslizables -->
    <div class="mb-12">
        <h2 class="text-3xl font-bold text-white mb-6 text-center">Módulos Principales</h2>
        
        <!-- Contenedor deslizable -->
        <div class="relative">
            <button onclick="scrollHorizontal('modules-container', -1)" 
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white/20 text-white p-3 rounded-full hover:bg-white/30 transition z-10">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            <div id="modules-container" class="scroll-container flex overflow-x-auto space-x-6 py-4 px-2">
                <!-- Aulas -->
                <div class="card-hover bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 min-w-[280px] flex flex-col items-center text-white cursor-pointer">
                    <i class="fas fa-chalkboard-teacher text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Aulas</h3>
                    <p class="text-center opacity-80">Gestión de espacios educativos</p>
                </div>

                <!-- Docentes -->
                <div class="card-hover bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 min-w-[280px] flex flex-col items-center text-white cursor-pointer">
                    <i class="fas fa-user-tie text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Docentes</h3>
                    <p class="text-center opacity-80">Administración del personal</p>
                </div>

                <!-- Estudiantes -->
                <div class="card-hover bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 min-w-[280px] flex flex-col items-center text-white cursor-pointer">
                    <i class="fas fa-users text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Estudiantes</h3>
                    <p class="text-center opacity-80">Gestión estudiantil</p>
                </div>

                <!-- Materias -->
                <div class="card-hover bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 min-w-[280px] flex flex-col items-center text-white cursor-pointer">
                    <i class="fas fa-book text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Materias</h3>
                    <p class="text-center opacity-80">Planificación académica</p>
                </div>

                <!-- Horarios -->
                <div class="card-hover bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 min-w-[280px] flex flex-col items-center text-white cursor-pointer">
                    <i class="fas fa-clock text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Horarios</h3>
                    <p class="text-center opacity-80">Organización temporal</p>
                </div>
            </div>
            
            <button onclick="scrollHorizontal('modules-container', 1)" 
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white/20 text-white p-3 rounded-full hover:bg-white/30 transition z-10">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- Dispositivos Inteligentes -->
    <div class="mb-12">
        <h2 class="text-3xl font-bold text-white mb-6 text-center">Dispositivos Inteligentes</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Aire Acondicionado -->
            <div class="card-hover bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-white text-center cursor-pointer">
                <i class="fas fa-snowflake text-3xl mb-3"></i>
                <h3 class="font-semibold">Aire Acondicionado</h3>
            </div>

            <!-- Iluminación -->
            <div class="card-hover bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-white text-center cursor-pointer">
                <i class="fas fa-lightbulb text-3xl mb-3"></i>
                <h3 class="font-semibold">Iluminación</h3>
            </div>

            <!-- Cortinas -->
            <div class="card-hover bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-white text-center cursor-pointer">
                <i class="fas fa-blinds text-3xl mb-3"></i>
                <h3 class="font-semibold">Cortinas</h3>
            </div>

            <!-- Proyectores -->
            <div class="card-hover bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-white text-center cursor-pointer">
                <i class="fas fa-video text-3xl mb-3"></i>
                <h3 class="font-semibold">Proyectores</h3>
            </div>
        </div>
    </div>
</div>
@endsection