@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <div class="container">
        <h1 class="my-4">Bienvenido a la página de cursos</h1>
        <a class="btn btn-primary mb-4" href="{{ route('cursos.create') }}">Crear curso</a>
        
        <div class="list-group">
            @foreach ($cursos as $curso)
                <a href="{{ route('cursos.show', $curso) }}" class="list-group-item list-group-item-action">{{ $curso->name }}</a>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $cursos->links() }}
        </div>
    </div>
@endsection
