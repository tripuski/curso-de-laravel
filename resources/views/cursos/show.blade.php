@extends('layouts.plantilla')

@section('title', 'Cursos'.$curso->name)

@section('content')
    <h1>Bievenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cusos</a>
    <br>
    <a href="{{route('curso.edit',$curso)}}">Editar curso</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->description}}</p>
    <form action="{{route('curso.destroy',$curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
