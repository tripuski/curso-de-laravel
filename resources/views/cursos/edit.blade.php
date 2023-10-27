@extends('layouts.plantilla')

@section('title', 'Editar Curso')

@section('content')
    <div class="container">
        <h1 class="my-4">En esta página podrás editar un curso</h1>
        <form action="{{ route('cursos.update', $curso) }}" method="POST">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $curso->name) }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" class="form-control" name="slug" value="{{ old('slug', $curso->slug) }}">
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea class="form-control" name="description" rows="5">{{ old('description', $curso->description) }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <input type="text" class="form-control" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
                @error('categoria')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Actualizar formulario</button>
        </form>
    </div>
@endsection
