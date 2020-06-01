@extends('layouts.app')

@section('content')
    <h1>EDITAR HEROE: {{ $hero->name }}</h1>

    <form action="{{ route('heroes.update', $hero) }}" method="POST" enctype="multipart/form-data">


        @method('PUT')

        @include('admin.heroes.form')

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('heroes.index') }}" class="btn btn-danger">Cancelar</a>

    </form>

@endsection
