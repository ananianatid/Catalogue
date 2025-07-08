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
            @include('shared.card', ['product' => $product])
        @endforeach
    @endif

@endsection
