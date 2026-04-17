<?php

namespace App\Http\Controllers;

use App\Models\CategoriaHistoria;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $categorias = CategoriaHistoria::where('ativa', true)
            ->orderBy('nome')
            ->get();

        return view('welcome', compact('categorias'));
    }
}