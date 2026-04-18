<?php

use Illuminate\Support\Facades\Route;
use App\Models\CategoriaHistoria;
use App\Http\Controllers\Auth\CadastroController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FanficController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Página inicial pública
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Autenticação
|--------------------------------------------------------------------------
*/
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

/*
|--------------------------------------------------------------------------
| Home logada
|--------------------------------------------------------------------------
*/
Route::get('/home', function () {
    if (!session()->has('usuario_id')) {
        return redirect()->route('login');
    }

    $categorias = CategoriaHistoria::where('ativa', true)
        ->orderBy('nome')
        ->get();

    return view('home-logado', compact('categorias'));
})->name('home.logado');

/*
|--------------------------------------------------------------------------
| Perfil
|--------------------------------------------------------------------------
*/
Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');
Route::post('/perfil/salvar', [PerfilController::class, 'salvar'])->name('perfil.salvar');
Route::post('/perfil/desativar', [PerfilController::class, 'desativar'])->name('perfil.desativar');

/*
|--------------------------------------------------------------------------
| Histórias
|--------------------------------------------------------------------------
*/
Route::get('/nova-historia/categorias', [HistoriaController::class, 'categorias'])->name('historias.categorias');
Route::get('/historias/criar/{slug}', [HistoriaController::class, 'criar'])->name('historias.criar');
Route::post('/historias/salvar', [HistoriaController::class, 'salvar'])->name('historias.salvar');

/*
|--------------------------------------------------------------------------
| Fanfics
|--------------------------------------------------------------------------
*/
Route::get('/fanfics/criar/{slug}', [FanficController::class, 'criar'])->name('fanfics.criar');
Route::post('/fanfics/salvar', [FanficController::class, 'salvar'])->name('fanfics.salvar');

Route::get('/fanfics/{id}/capitulos', [FanficController::class, 'capitulosIndex'])->name('fanfics.capitulos.index');
Route::get('/fanfics/{id}/capitulos/criar', [FanficController::class, 'capituloCriar'])->name('fanfics.capitulos.criar');
Route::post('/fanfics/{id}/capitulos/salvar', [FanficController::class, 'capituloSalvar'])->name('fanfics.capitulos.salvar');

Route::get('/fanfics/{fanficId}/capitulos/{capituloId}/editar', [FanficController::class, 'capituloEditar'])->name('fanfics.capitulos.editar');
Route::post('/fanfics/{fanficId}/capitulos/{capituloId}/atualizar', [FanficController::class, 'capituloAtualizar'])->name('fanfics.capitulos.atualizar');
Route::post('/fanfics/{fanficId}/capitulos/{capituloId}/publicar', [FanficController::class, 'capituloPublicar'])->name('fanfics.capitulos.publicar');

Route::get('/fanfic/{slug}', [FanficController::class, 'visualizar'])->name('fanfics.visualizar');
Route::get('/fanfic/{slug}/capitulo/{numero}', [FanficController::class, 'visualizarCapitulo'])->name('fanfics.capitulos.visualizar');

/*
|--------------------------------------------------------------------------
| Categorias
|--------------------------------------------------------------------------
*/
Route::get('/categorias/{slug}', [CategoriaController::class, 'show'])->name('categorias.show');

Route::get('/teste-email', function () {
    Mail::raw('Teste de envio funcionando!', function ($message) {
        $message->to('kaio.andriao.dalfior@gmail.com')
                ->subject('Teste HorrorWiki');
    });

    return 'Email enviado!';
});