<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CadastroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [CadastroController::class, 'cadastrar'])
    ->name('register.salvar');