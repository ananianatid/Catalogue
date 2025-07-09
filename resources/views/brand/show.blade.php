@extends('base')
@section('title', 'Voir les produits de la marque ' . $brand->name)
@section('content')
        <div class="flex justify-between items-center my-4 ">
            <p class="text-4xl text-gray-900 dark:text-white">Nos produits {{ $brand->name }}</p>
        </div>
    @foreach ($products as $product )
        <div class="">
            @foreach ($products as $product )
                @include('shared.card', ['product' => $product])
            @endforeach
        </div>
    @endforeach
@endsection
