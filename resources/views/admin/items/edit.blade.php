@extends('layouts.app')

@section('content')
    <h1>EDITAR ITEM: {{ $item->name }} </h1>

    <form action="{{ route('item.update', $item) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" placeholder="Ingrese un Nombre" required>
        </div>

         <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{ $item->hp }}" placeholder="Ingrese los puntos de vida" required>
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" value="{{ $item->atq }}" placeholder="Ingrese los puntos de ataque" required>
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" value="{{ $item->def }}" placeholder="Ingrese los puntos de defensa" required>
        </div>

        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{ $item->luck }}" placeholder="Ingrese los puntos de Suerte" required>
        </div>

        <div class="form-group">
            <label for="cost">Moneda</label>
            <input type="number" class="form-control" id="cost" name="cost" value="{{ $item->cost }}" placeholder="Ingrese la cantidad de Monedas" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('item.index') }}" class="btn btn-danger">Cancelar</a>

    </form>

@endsection
