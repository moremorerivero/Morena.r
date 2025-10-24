@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 text-white">
    <h2 class="text-3xl font-bold text-center mb-8">Iniciar Sesión</h2>
    
    <form action="{{ route('login') }}" method="POST">
        @csrf
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
        
        <button type="submit" 
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-lg transition duration-300">
            Ingresar
        </button>
    </form>
    
    <div class="text-center mt-6">
        <a href="{{ route('register') }}" class="text-blue-300 hover:text-blue-200">¿No tienes cuenta? Regístrate</a>
    </div>
</div>
@endsection