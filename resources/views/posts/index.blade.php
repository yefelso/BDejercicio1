@extends('layouts.app')

@section('content')
<div class="container">
    <h1>AgregarAlumno</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-info">Agregar Alumno</a>
        </div>
<div class="container">
    <h1>Lista de Alumnos</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Curso</th>
                <th>Grado/Sección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->edad }}</td>
                    <td>{{ $alumno->curso }}</td>
                    <td>{{ $alumno->grado_seccion }}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection