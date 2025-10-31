<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Mostrar formulario de login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Procesar login - REDIRIGIR AL INICIO
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Redirigir al inicio en lugar del dashboard
            return redirect()->route('home')->with('success', '¡Bienvenido de vuelta!');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    // Mostrar formulario de registro
    public function showRegister()
    {
        return view('auth.register');
    }

    // Procesar registro - REDIRIGIR AL INICIO
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'tipo' => 'required|in:alumno,profesor'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => $request->tipo
        ]);

        Auth::login($user);

        // Redirigir al inicio en lugar del dashboard
        return redirect()->route('home')->with('success', '¡Cuenta creada exitosamente!');
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', '¡Sesión cerrada correctamente!');
    }
}