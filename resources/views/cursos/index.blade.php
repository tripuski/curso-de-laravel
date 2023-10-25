@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bievenido a la pagina de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <a href="{{route('cursos.show',$curso)}}"><li>{{$curso->name}}</li></a>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection

