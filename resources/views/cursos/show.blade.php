@extends('layouts.plantilla')

@section('title', 'Curso: ' . $curso->name)

@section('content')
    <div class="container">
        <h1 class="my-4">Bienvenido al curso: {{ $curso->name }}</h1>
        <a class="btn btn-secondary mb-3" href="{{ route('cursos.index') }}">Volver a cursos</a>
        <a class="btn btn-primary mb-3" href="{{ route('cursos.edit', $curso) }}">Editar curso</a>

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $curso->name }}</h2>
                <p class="card-text"><strong>Categoría: </strong>{{ $curso->categoria }}</p>
                <p class="card-text">{{ $curso->description }}</p>
            </div>
        </div>

        <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger mt-3">Eliminar</button>
        </form>
    </div>
@endsection
