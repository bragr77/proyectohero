@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>LISTA DE ENEMIGOS</h1>
    </div>

    <div class="row">
        <a href="{{ route('enemy.create') }}" class="btn btn-primary mb-3">Crear Enemigo</a>
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
                <th scope="col">Monedas</th>
                <th scope="col">Experiencia</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($enemies as $enemy)
                    <tr>
                        <th scope="row">{{ $cont++ }}</th>
                        <td>{{ $enemy->name }}</td>
                        <td>{{ $enemy->hp }}</td>
                        <td>{{ $enemy->atq }}</td>
                        <td>{{ $enemy->def }}</td>
                        <td>{{ $enemy->coins }}</td>
                        <td>{{ $enemy->xp }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('enemy.edit', $enemy) }}" class="mr-1 btn btn-success btn-sm">Modificar</a>
                                <form action="{{ route('enemy.destroy', $enemy) }}" method="POST">
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
                {{ $enemies->links() }}
            </div>
        </div>
    </div>

@endsection

