@extends('base')
@section('title', 'Be market ')
@section('content')
{{-- {{ dd($results) }} --}}
<div>

<div class="w-full">
    <div class="my-3">
        <p class="text-4xl text-gray-900 dark:text-white">A l'affiche !</p>
    </div>

<div class="carousel carousel-center bg-neutral rounded-box max-w-full space-x-4 p-4">
    @foreach ($showcase as $product)
        @include('shared.showcase_card', ['product' => $product])
    @endforeach
</div>


</div>




    <div class="">
        <div class="flex justify-between items-center my-4 ">
            <p class="text-3xl text-gray-900 dark:text-white">Nos produits</p>
            <a href="{{ route('index.product') }}">
                <button class="btn btn-soft btn-success">
                    Voir tout
                </button>
            </a>
        </div>

        @foreach ($results as $result )
            <div class="w-full">
                <div class="flex justify-between items-center my-3 ">
                    <p class="text-3xl text-gray-900 dark:text-white">{{ $result['brand']->name }}</p>
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
