@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>LISTA DE ITEMS</h1>
    </div>

    <div class="row">
        <a href="{{ route('item.create') }}" class="btn btn-primary mb-3">Crear Item</a>
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
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($items as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->hp }}</td>
                        <td>{{ $item->atq }}</td>
                        <td>{{ $item->def }}</td>
                        <td>{{ $item->luck }}</td>
                        <td>{{ $item->cost }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('item.edit', $item) }}" class="mr-1 btn btn-success btn-sm">Modificar</a>
                                <form action="{{ route('item.destroy', $item) }}" method="POST">
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
                {{ $items->links() }}
            </div>
        </div>
    </div>

@endsection
