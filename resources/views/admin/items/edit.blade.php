@extends('layouts.app')

@section('content')
    <h1>EDITAR ITEM: {{ $item->name }} </h1>

    <form action="{{ route('item.update', $item) }}" method="POST" enctype="multipart/form-data">

        @method('PUT')

        @include('admin.items.form')

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('item.index') }}" class="btn btn-danger">Cancelar</a>

    </form>

@endsection
