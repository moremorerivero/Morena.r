<<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AulaController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Aulas Routes (COMPLETAS)
Route::get('/aulas', [AulaController::class, 'index'])->name('aulas.index');
Route::get('/aulas/create', [AulaController::class, 'create'])->name('aulas.create');
Route::post('/aulas', [AulaController::class, 'store'])->name('aulas.store');
Route::get('/aulas/{id}', [AulaController::class, 'show'])->name('aulas.show');
Route::get('/aulas/{id}/edit', [AulaController::class, 'edit'])->name('aulas.edit');
Route::put('/aulas/{id}', [AulaController::class, 'update'])->name('aulas.update');
Route::delete('/aulas/{id}', [AulaController::class, 'destroy'])->name('aulas.destroy');

// Otros módulos (vistas estáticas por ahora)
Route::get('/docentes', function () { 
    return view('modules.docentes'); 
})->name('docentes.index');

Route::get('/estudiantes', function () { 
    return view('modules.estudiantes'); 
})->name('estudiantes.index');

Route::get('/materias', function () { 
    return view('modules.materias'); 
})->name('materias.index');

Route::get('/horarios', function () { 
    return view('modules.horarios'); 
})->name('horarios.index');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');