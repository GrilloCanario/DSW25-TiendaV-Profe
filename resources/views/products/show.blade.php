@extends('layouts.app');


@section('title', 'Producto');


@section('content');
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Precio: {{ number_format($product->price, 2) }}€</p>
<p>Stock: {{ $product->stock }}</p>
<p>Etiquetas:</p>
<ul class="tags-list">
    @foreach ($product->tags as $tag)
        <li>
            
            <form action="{{ route('products.detachTag', ['product' => $product, 'tag' => $tag]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">{{ $tag->name }}</button>
            </form>
        </li>
    @endforeach
</ul>

<form action="{{ route('products.attachTag', $product) }}" method="POST">
    @csrf
    <p>
        Añadir etiqueta:
        <select name="tag_id">
            @foreach ($allTags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        <button type="submit">Añadir</button>
    </p>
</form>
@endsection;