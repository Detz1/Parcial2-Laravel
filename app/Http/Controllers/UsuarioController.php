<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Libro;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $libros = Libro::all();
        return view('usuarios.create',compact('libros'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'libro_id' => 'required|exists:libros,id',
        ]);

        Usuario::create($data);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario creado exitosamente.');
    }

    public function show(Usuario $usuario)
    {
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit(Usuario $usuario)
    {   
        $usuarios = Usuario::all(); 
        return view('usuarios.edit', compact('usuario'),compact('libros'));
      
    }

    public function update(Request $request, Usuario $usuario)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'libro_id' => 'required|exists:libros,id',
        ]);

        $usuario->update($data);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario eliminado exitosamente.');
    }
}
