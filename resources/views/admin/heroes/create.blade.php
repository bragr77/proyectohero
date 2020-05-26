@extends('layouts.app')

@section('content')
    <h1>CREAR NUEVO HEROE</h1>

    <form action="{{ route('heroes.store') }}" method="POST">

        @include('admin.heroes.form')

        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('heroes.index') }}" class="btn btn-danger">Cancelar</a>

    </form>

@endsection
