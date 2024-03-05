<?php

namespace App\Http\Controllers;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::with('autor')->get();
        return view('autores.index', compact('autores'));
    }
}
