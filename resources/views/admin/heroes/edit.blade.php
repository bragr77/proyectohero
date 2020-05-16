@extends('layouts.app')

@section('content')
    <h1>EDITAR HEROE</h1>

    <form action="{{ route('heroesupdate', ['id' => $hero->id]) }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $hero->name }}" placeholder="Ingrese un Nombre" required>
        </div>

         <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{ $hero->hp }}" placeholder="Ingrese los puntos de vida" required>
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" value="{{ $hero->atq }}" placeholder="Ingrese los puntos de ataque" required>
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" value="{{ $hero->def }}" placeholder="Ingrese los puntos de defensa" required>
        </div>

        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{ $hero->luck }}" placeholder="Ingrese los puntos de Suerte" required>
        </div>

        <div class="form-group">
            <label for="coins">Moneda</label>
            <input type="number" class="form-control" id="coins" name="coins" value="{{ $hero->coins }}" placeholder="Ingrese la cantidad de Monedas" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('heroes') }}" class="btn btn-danger">Cancelar</a>

    </form>

@endsection
