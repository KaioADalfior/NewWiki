<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CadastroController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PerfilController;

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'autenticar'])->name('login.autenticar');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/cadastro', function () {
    return view('auth.register');
})->name('cadastro');

Route::post('/register', [CadastroController::class, 'cadastrar'])->name('register.salvar');

Route::get('/home', function () {
    if (!session()->has('usuario_id')) {
        return redirect()->route('login');
    }

    return view('home-logado');
})->name('home.logado');

Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');
Route::post('/perfil/salvar', [PerfilController::class, 'salvar'])->name('perfil.salvar');
Route::post('/perfil/desativar', [PerfilController::class, 'desativar'])->name('perfil.desativar');