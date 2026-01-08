@extends('layouts.app')


@section('title', 'Nueva Categoría')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endpush


@section('content')
<h1>Modificar Categoría</h1>
<form action="{{ route('categories.update', ['category' => $category]) }}" method="POST">
    @csrf
    $@method('put')
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ $category->name}}" required>
    <label for="description">Descripción</label>
    <textarea name="description" id="description"required>{{ $category->description}}</textarea>
    <button type="submit">Modificar</button>
</form>
@endsection