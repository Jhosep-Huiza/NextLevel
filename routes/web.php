<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web_principal');
})->name('web.inicio');

Route::get('/intranet', function () {
    return view('intranet');
})->name('portal');

Route::get('/login-colegio-familia', function () {
    return view('login_colegio_familia');
})->name('login.familia');

Route::get('/login-colegio-alumno', function () {
    return view('login_colegio_alumno');
})->name('login.alumno');

Route::get('/login-academia-familia', function () {
    return view('login_academia_familia');
})->name('login.academia.familia');

Route::get('/login-academia-alumno', function () {
    return view('login_academia_alumno');
})->name('login.academia.alumno');
