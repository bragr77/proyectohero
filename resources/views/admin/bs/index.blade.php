@extends('layouts.app')

@section('content')

    <div class="row">
        <h1>SISTEMA DE BATALLA</h1>
    </div>

    <div class="row text-center text-white mt-2">

        <div class="col-5 card bg-primary">
            <h2>Heroe</h2>
        </div>

        <div class="col card bg-warning mx-1">
            <h2>VS.</h2>
        </div>

        <div class="col-5 card bg-danger">
            <h2>Enemigo</h2>
        </div>

    </div>

    <div class="row card bg-info text-white mt-2">
        <h2 class="text-center">Eventos de Batalla</h2>
    </div>

    <div class="mt-3">
        <div class="alert alert-success" role="alert">
            <h5>Heroe realiza un ataque de 15 puntos al enemigo!</h5>
        </div>
        <div class="alert alert-danger" role="alert">
            <h5>Enemigo daña al heroe con 10 puntos...!</h5>
        </div>
    </div>


@endsection
