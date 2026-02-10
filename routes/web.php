<?php

use Illuminate\Support\Facades\Route;

// Ruta Principal
Route::get('/', function () {
    return view('web_principal');
})->name('web.inicio');

// Portal de Selección
Route::get('/intranet', function () {
    return view('intranet');
})->name('portal');

// --- RUTAS DE COLEGIO (UNIFICADAS) ---
// Ahora ambas opciones (Familia y Alumno) cargan la misma vista deslizante
Route::get('/login-colegio', function () {
    return view('login_colegio');
})->name('login.colegio');

// --- RUTAS DE ACADEMIA (POR AHORA SE MANTIENEN SEPARADAS) ---
Route::get('/login-academia-familia', function () {
    return view('login_academia_familia');
})->name('login.academia.familia');

Route::get('/login-academia-alumno', function () {
    return view('login_academia_alumno');
})->name('login.academia.alumno');
