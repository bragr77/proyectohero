@extends('layouts.app')

@section('content')

    <div class="row">
        <h1>SISTEMA DE BATALLA</h1>
    </div>

    <div class="row text-center text-white mt-2">

        <div class="col-5 card bg-primary">
            <h2>{{ $heroName }}</h2>
        </div>

        <div class="col card bg-warning mx-1">
            <h2>VS.</h2>
        </div>

        <div class="col-5 card bg-danger">
            <h2>{{ $enemyName }}</h2>
        </div>

    </div>

    <div class="row card bg-info text-white mt-2">
        <h2 class="text-center">Eventos de Batalla</h2>
    </div>

    <div class="mt-3">

        @foreach ($events as $ev)

            <div class="alert @if ($ev["winner"] == "hero") alert-success @else alert-danger @endif"  role="alert">
                <h5>{{ $ev["text"] }}</h5>
            </div>

        @endforeach

    </div>


@endsection
