@extends('layouts.plantilla')

@section('title', 'Editar')

@section('content')
    <h1>En esta pagina podras Editar un curso</h1>

    <form action="{{route('cursos.update',$curso)}}" method="post">
        @csrf
        @method('put')

        <label for="name" >
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>
        @error('name')
            <br>
           <span>*{{$message}}</span> 
            <br>
        @enderror
        <br>
        <label for="slug" >
            Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug',$curso->slug)}}">
        </label>
        @error('slug')
            <br>
           <span>*{{$message}}</span> 
            <br>
        @enderror
        <br>
        <label for="description">
            Descripcion:
            <br>
            <textarea name="description" rows="5">{{old('description',$curso->description)}}</textarea>
        </label>
        @error('description')
            <br>
           <span>*{{$message}}</span> 
            <br>
        @enderror
        <br>
        <label for="categoria">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
           <span>*{{$message}}</span> 
            <br>
        @enderror
        <br>
        <button type="submit">Atualizar formulario</button>
    </form>
@endsection

