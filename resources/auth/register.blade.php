@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 text-white">
    <h2 class="text-3xl font-bold text-center mb-8">Crear Cuenta</h2>
    
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-6">
            <label class="block mb-2 font-semibold">Nombre Completo</label>
            <input type="text" name="name" required 
                   class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-white/60 focus:outline-none focus:border-blue-400">
        </div>
        
        <div class="mb-6">
            <label class="block mb-2 font-semibold">Email</label>
            <input type="email" name="email" required 
                   class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-white/60 focus:outline-none focus:border-blue-400">
        </div>
        
        <div class="mb-6">
            <label class="block mb-2 font-semibold">Contraseña</label>
            <input type="password" name="password" required 
                   class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-white/60 focus:outline-none focus:border-blue-400">
        </div>
        
        <div class="mb-6">
            <label class="block mb-2 font-semibold">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" required 
                   class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-white/60 focus:outline-none focus:border-blue-400">
        </div>
        
        <div class="mb-6">
            <label class="block mb-2 font-semibold">Tipo de Usuario</label>
            <select name="tipo" required 
                    class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-400">
                <option value="estudiante">Estudiante</option>
                <option value="profesor">Profesor</option>
                <option value="administrador">Administrador</option>
            </select>
        </div>
        
        <button type="submit" 
                class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 rounded-lg transition duration-300">
            Registrarse
        </button>
    </form>
    
    <div class="text-center mt-6">
        <a href="{{ route('login') }}" class="text-blue-300 hover:text-blue-200">¿Ya tienes cuenta? Inicia Sesión</a>
    </div>
</div>
@endsection