<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\AireAcondicionadoController;
use App\Http\Controllers\FocoController;
use App\Http\Controllers\CortinaController;

// Página de inicio (pública)
Route::get('/', function () {
    return view('home');
})->name('home');

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas públicas
Route::get('/aulas', [AulaController::class, 'index'])->name('aulas.index');
Route::get('/aulas/{id}', [AulaController::class, 'show'])->name('aulas.show');

// Grupo de rutas protegidas
Route::middleware(['auth'])->group(function () {
    // Aulas (completas)
    Route::resource('aulas', AulaController::class)->except(['index', 'show']);
    
    // Reservas
    Route::resource('reservas', ReservaController::class);
    
    // Tareas
    Route::resource('tareas', TareaController::class);
    
    // Académico
    Route::resource('materias', MateriaController::class);
    Route::resource('horarios', HorarioController::class);
    
    // Usuarios
    Route::resource('alumnos', AlumnoController::class);
    Route::resource('docentes', DocenteController::class);
    
    // Equipamiento
    Route::resource('aire', AireAcondicionadoController::class);
    Route::resource('focos', FocoController::class);
    Route::resource('cortinas', CortinaController::class);
});

// Redirección después del login
Route::get('/dashboard', function () {
    return redirect()->route('home');
})->middleware('auth')->name('dashboard');

Route::get('/aulas-modulos', function () {
    return view('aulas-modulos');
});