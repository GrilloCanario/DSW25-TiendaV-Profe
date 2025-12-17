@extends('layouts.app')


@section('title', 'Nuevo Producto')


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endpush


@section('content')
<h1>Modificar Producto</h1>
<form action="{{ route('products.update', ['product' => $product]) }}" method="POST">
    @csrf
    $@method('put')
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ $product->name}}" required>
    <label for="description">Descripción</label>
    <textarea name="description" id="description"required>{{ $product->description}}</textarea>
    <label for="price">Precio</label>
    <input type="number" name="price" id="price" step="0.01" value="{{ $product->price}}"  required>
    <label for="stock">Stock</label>
    <input type="number" name="stock" id="stock" value="{{ $product->stock}}"  required>
    <button type="submit">Modificar</button>
</form>
@endsection
