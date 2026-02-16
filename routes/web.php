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
