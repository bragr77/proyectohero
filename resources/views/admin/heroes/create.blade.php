@extends('layouts.app')

@section('content')
    <h1>CREAR NUEVO HEROE</h1>

    <form action="{{ route('heroes.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese un Nombre" required>
        </div>

         <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" placeholder="Ingrese los puntos de vida" required>
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" placeholder="Ingrese los puntos de ataque" required>
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" placeholder="Ingrese los puntos de defensa" required>
        </div>

        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" placeholder="Ingrese los puntos de Suerte" required>
        </div>

        <div class="form-group">
            <label for="coins">Moneda</label>
            <input type="number" class="form-control" id="coins" name="coins" placeholder="Ingrese la cantidad de Monedas" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('heroes.index') }}" class="btn btn-danger">Cancelar</a>

    </form>

@endsection
