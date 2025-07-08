@extends('base')
@section('title', 'Catalogue')
@section('content')
<div>

    <div class="w-full bg-slate-200 p-2">
        <div class="my-3">
            <p class="text-3xl text-slate-900 ">A l'affiche !</p>
        </div>

        <div class="carousel carousel-center bg-slate-400 rounded-box max-w-full space-x-4 p-4">
            @foreach ($showcase as $product)
                @include('shared.showcase_card', ['product' => $product])
            @endforeach
        </div>


    </div>




    <div class="p-2 bg-slate-100">
        {{-- <div class="flex justify-between items-center my-4 ">
            <p class="text-2xl text-gray-900 dark:text-white">Nos produits</p>
            <a href="{{ route('index.product') }}">
                <button class="btn btn-soft ">
                    Voir tout
                </button>
            </a>
        </div> --}}

        @foreach ($results as $result )
            <div class="w-full">
                <div class="flex justify-between items-center my-3 ">
                    <p class="text-2xl font-bold text-steal-900 ">{{ $result['brand']->name }}</p>
                    <a href="{{ route('show.brand',['brand'=>$result['brand']]) }}">
                        <button class="btn btn-soft btn-accent">
                            Voir tout
                        </button>
                    </a>
                </div>
                @foreach ($result['products'] as $product )
                    @include('shared.card', ['product' => $product])
                @endforeach
            </div>
        @endforeach
    </div>
</div>

@endsection
