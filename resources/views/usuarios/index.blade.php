<!-- resources/views/personas/index.blade.php -->
@extends('layouts.plantilla')

@section('content')
    <h1>Lista Reservas</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Libro-Reservado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->edad }}</td>
                    <td>
                        <a href="{{ route('usuarios.show', $usuario->id) }}">Ver</a>
                        <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('usuarios.create') }}">Crear Reserva</a>
@endsection
