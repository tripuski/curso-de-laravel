@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
    <div class="container">
        <h1 class="my-4">Déjanos un mensaje</h1>
        <form action="{{ route('contactanos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger"><strong>{{ $message }}</strong></p>
                @enderror
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="text" class="form-control" name="correo" value="{{ old('correo') }}">
                @error('correo')
                    <p class="text-danger"><strong>{{ $message }}</strong></p>
                @enderror
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" name="mensaje" rows="4">{{ old('mensaje') }}</textarea>
                @error('mensaje')
                    <p class="text-danger"><strong>{{ $message }}</strong></p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Enviar mensaje</button>
        </form>

        @if (session('info'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('info') }}
            </div>
        @endif
    </div>
@endsection
