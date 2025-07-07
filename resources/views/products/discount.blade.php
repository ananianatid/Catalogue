@extends('base')
@section('title', 'Be market ')
@section('content')
<div class="m-3">
    <h1 class="text-xl">Promotions</h1>
    <p>Voici les produits actuellement en promotion :</p>
    @if($products->isEmpty())
        <p>Aucune promotion en cours.</p>
    @else
        @foreach ($products as $product)
            <div class="border-2 m-1 p-1">
                <img
                    class="object-contain border-2 border-gray-300 rounded-md h-48 w-40 shadow-sm"
                    src="{{ $product->image[0] ?? 'https://via.placeholder.com/160x192?text=No+Image' }}"
                    alt="{{ $product->name }}"
                >
                <p class="text-xl">{{ $product->name }}</p>
                <p>Prix: {{ $product->price }} €</p>
                <a href="{{ route('show.product', ['product' => $product]) }}">Voir le produit</a>
            </div>
        @endforeach
    @endif

@endsection
