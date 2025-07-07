@extends('base')
@section('title', 'Be market ')
@section('content')
    @foreach ($products as $product )
        <div class="m-1 p-1 border-2">
        <img
            class="object-contain border-2 border-gray-300 rounded-md h-48 w-40 shadow-sm"
            src="{{ $product->image[0] ?? 'https://via.placeholder.com/160x192?text=No+Image' }}"
            alt="{{ $product->name }}"
        >
            <p>
                {{ $product->name }}
            </p>
            <a href="{{ route('show.product',['product'=>$product]) }}">voir</a>
        </div>
    @endforeach
@endsection
