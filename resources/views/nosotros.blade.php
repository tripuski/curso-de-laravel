@extends('layouts.plantilla')

@section('title', 'Nosotros')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sobre Nosotros</div>

                    <div class="card-body">
                        <h1 class="card-title">Bienvenido a la página de Nosotros</h1>
                        <p class="card-text">Somos un equipo apasionado dedicado a brindar los mejores servicios y recursos en el campo de...</p>
                        <p class="card-text">Descubre más sobre nuestro equipo y nuestra misión en esta página.</p>
                        <a href="{{ route('home') }}" class="btn btn-primary">Conoce a nuestro equipo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
