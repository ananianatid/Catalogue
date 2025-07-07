@extends('base')
@section('title', 'Be market ')
@section('content')
    <div class="m-2 p-2 border-2" >
        <p>{{ $product->name }}</p>
        <p>{{ $product->slug }}</p>
        <p>{{ $product->price }}</p>
        <p>{{ $product->slug }}</p>
        <p>{{ $product->brand->name }}</p>
        <p>{{ $product->category->name }}</p>
        <p>{{ $product->is_active }} en vente</p>
        <p>{{ $product->is_featured }} mis en avant</p>
        @foreach ( $product->images as  $image)
            <img src="{{ $image }}" alt="">
        @endforeach
        <p>{{ $product->description }}</p>
        <p>{{ $product->tech_sheet }}</p>
    </div>

    <div class="m-2 p-2 border-2">
        <h3>Autres produits {{ $product->brand->name }}</h3>
        @foreach ($same_brand_products as $same_brand_product)
            <div class="m-1 p-1 border-2">
                <img
                    class="object-contain border-2 border-gray-300 rounded-md h-48 w-40 shadow-sm"
                    src="{{ $same_brand_product->images[0] ?? 'https://via.placeholder.com/160x192?text=No+Image' }}"
                    alt="{{ $same_brand_product->name }}"
                >
                <p>{{ $same_brand_product->name }}</p>
                <a href="{{ route('show.product', ['product' => $same_brand_product]) }}">voir</a>
            </div>
        @endforeach
    </div>
    <div class="m-2 p-2 border-2">
        <h3>Autres {{ $product->category->name }}</h3>
        @foreach ($same_category_products as $same_category_product)
            <div class="m-1 p-1 border-2">
                <img
                    class="object-contain border-2 border-gray-300 rounded-md h-48 w-40 shadow-sm"
                    src="{{ $same_category_product->images[0] ?? 'https://via.placeholder.com/160x192?text=No+Image' }}"
                    alt="{{ $same_category_product->name }}"
                >
                <p>{{ $same_category_product->name }}</p>
                <a href="{{ route('show.product', ['product' => $same_category_product]) }}">voir</a>
            </div>
        @endforeach
@endsection
