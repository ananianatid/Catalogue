@extends('base')
@section('title', 'voir les produits de la catégorie ' . $category->name)
@section('content')
    @foreach ($products as $product )
        @include('shared.card', ['product' => $product])
    @endforeach
@endsection
