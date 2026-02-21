<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web_principal');
})->name('web.inicio');

Route::get('/intranet', function () {
    return view('intranet');
})->name('portal');

Route::get('/login-colegio', function () {
    return view('login_colegio');
})->name('login.colegio');

Route::get('/login-academia', function () {
    return view('login_academia');
})->name('login.academia');

Route::get('/propuesta-educativa', function () {
    return view('propuesta');
})->name('propuesta.educativa');

Route::get('/experiencia-next-level', function () {
    return view('experiencia');
})->name('experiencia');

Route::get('/ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');

Route::get('/nuestros-valores', function () {
    return view('nuestros_valores');
})->name('nuestros.valores');

Route::get('/sobre-nosotros', function () {
    return view('sobre_nosotros');
})->name('sobre.nosotros');

Route::get('/academia', function () {
    return view('academia');
})->name('academia');
