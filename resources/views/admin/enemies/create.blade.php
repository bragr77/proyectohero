@extends('layouts.app')

@section('content')
    <h1>CREAR NUEVO ENEMIGO</h1>

    <form action="{{ route('enemy.store') }}" method="POST" enctype="multipart/form-data">

        @include('admin.enemies.form')

        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('enemy.index') }}" class="btn btn-danger">Cancelar</a>

    </form>

@endsection
