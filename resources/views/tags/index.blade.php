@extends('layouts.app')

@section('title', 'Etiquetas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endpush

@section('content')
<h1>Lista de Categorías</h1>
<a href="{{ route('tags.create') }}"><button>Nueva Etiqueta</button></a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td>
                    <a href="{{ route('tags.show', $tag) }}"><button>Ver</button></a>
                    <form action="{{ route('tags.destroy', $tag) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
