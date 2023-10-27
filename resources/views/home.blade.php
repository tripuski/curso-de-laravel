@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="jumbotron text-center my-5">
            <h1 class="display-4">¡Bienvenido a nuestra página principal, Sr. Usuario!</h1>
            <p class="lead">Descubre todo lo que tenemos para ofrecerte.</p>
            <hr class="my-4">
            <p>Explora nuestros cursos, conoce nuestro equipo y ponte en contacto con nosotros.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('cursos.index') }}" role="button">Ver Cursos</a>
        </div>
    </div>
@endsection
