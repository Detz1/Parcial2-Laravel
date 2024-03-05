<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor_id' => 'required|exists:autores,id',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        Libro::create($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro creado exitosamente.');
    }

    public function edit(Libro $libro)
    {
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo' => 'required',
            'autor_id' => 'required|exists:autores,id',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $libro->update($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro actualizado exitosamente.');
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();

        return redirect()->route('libros.index')
            ->with('success', 'Libro eliminado exitosamente.');
    }
}
