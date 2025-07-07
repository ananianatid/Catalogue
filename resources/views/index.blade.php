@extends('base')
@section('title', 'Be market ')
@section('content')
{{-- {{ dd($results) }} --}}
<div>
    <div class="m-3">
        <h1 class="text-xl" >Showcase</h1>
        @foreach ($showcase as $product )
        <p>{{ $product->name }}</p>
        @endforeach
    </div>
    <div class="m-3 border-2 p-1">
        <div class="border m-1 p-1">
            <h1 class="text-xl">Nos produits</h1>
            <a href="{{ route('index.product') }}">voir tout</a>
        </div>

    @foreach ($results as $result )
        <div class="border-2 m-1 p-1">
                <div class="border-2 m-1 p-1">
                    <p>{{ $result['brand']->name }}</p>
                    <a href="{{ route('show.brand',['brand'=>$result['brand']]) }}">voir</a>
                </div>
                @foreach ($result['products'] as $product )
                    <div class="border-2 m-1 p-1 ">
                        <p>{{ $product->name }}</p>
                        <a href="{{ route('show.product',['product'=>$product]) }}">voir</a>
                        @if ($product->discount_percent != 0)
                            <p class="text-red-500">-{{ $product->discount_percent }}%</p>
                            Prix: <span class="line-through">{{ $product->price }}€</span>
                            <p class="text-green-500">{{ $product->price - ($product->price * $product->discount_percent / 100) }}€</p>
                        @else
                            <p>Prix: {{ $product->price }}€</p>
                        @endif
                    </div>
                @endforeach
        </div>
    @endforeach
    </div>
</div>

@endsection
