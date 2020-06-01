@extends('layouts.app')

@section('content')
    <h1>EDITAR ENEMIGO: {{ $enemy->name }}</h1>

    <form action="{{ route('enemy.update', $enemy) }}" method="POST" enctype="multipart/form-data">

        @method('PUT')

        @include('admin.enemies.form')

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('heroes.index') }}" class="btn btn-danger">Cancelar</a>

    </form>

@endsection
