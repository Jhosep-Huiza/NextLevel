<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('portal');

Route::get('/login-colegio-familia', function () {
    return view('login_colegio_familia');
})->name('login.familia');

Route::get('/login-colegio-alumno', function () {
    return view('login_colegio_alumno');
})->name('login.alumno');

Route::get('/login-academia', function () {
    return view('login_academia');
})->name('login.academia');
