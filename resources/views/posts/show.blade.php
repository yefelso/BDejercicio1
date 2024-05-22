<!-- resources/views/alumnos/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Detalles del Alumno</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $alumnos->id }}</td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td>{{ $alumnos->nombre }}</td>
                </tr>
                <tr>
                    <th>Apellido</th>
                    <td>{{ $alumnos->apellido }}</td>
                </tr>
                <tr>
                    <th>Edad</th>
                    <td>{{ $alumnos->edad }}</td>
                </tr>
                <tr>
                    <th>Curso</th>
                    <td>{{ $alumnos->curso }}</td>
                </tr>
                <tr>
                    <th>Grado/Sección</th>
                    <td>{{ $alumnos->grado_seccion }}</td>
                </tr>
            </table>
            <a href="{{ route('home') }}" class="btn btn-primary mt-3">Volver</a>
        </div>
    </div>
</div>
@endsection
