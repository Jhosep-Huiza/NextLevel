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
Route::get('/login-colegio', function () {
    return view('login_colegio');
})->name('login.colegio');

// --- RUTAS DE ACADEMIA (UNIFICADAS) ---
Route::get('/login-academia', function () {
    return view('login_academia');
})->name('login.academia');
