@extends('layouts.app')

@section('content')
    <h1>CREAR NUEVO ITEM</h1>

    <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">

        @include('admin.items.form')

        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('item.index') }}" class="btn btn-danger">Cancelar</a>

    </form>

@endsection
