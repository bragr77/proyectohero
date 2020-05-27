@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>LISTA DE HEROES</h1>
    </div>

    <div class="row">
        <a href="{{ route('heroes.create') }}" class="btn btn-primary mb-3">Crear Heroe</a>
    </div>

    <div class="row">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre</th>
                <th scope="col">HP</th>
                <th scope="col">Ataque</th>
                <th scope="col">Defensa</th>
                <th scope="col">Suerte</th>
                <th scope="col">Monedas</th>
                <th scope="col">Experiencia</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($heroes as $hero)
                    <tr>
                        <th scope="row">{{ $cont++ }}</th>
                        <td>{{ $hero->name }}</td>
                        <td>{{ $hero->hp }}</td>
                        <td>{{ $hero->atq }}</td>
                        <td>{{ $hero->def }}</td>
                        <td>{{ $hero->luck }}</td>
                        <td>{{ $hero->coins }}</td>
                        <td>{{ $hero->xp }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('heroes.edit', $hero) }}" class="mr-1 btn btn-success btn-sm">Modificar</a>
                                <form action="{{ route('heroes.destroy', $hero) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-1 btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="container">
            <div class="pagination justify-content-center">
                {{ $heroes->links() }}
            </div>
        </div>
    </div>

@endsection
