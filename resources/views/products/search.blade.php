@extends('base')
@section('title', 'Be market ')
@section('content')
{{-- {{ dd($results) }} --}}
<div>
    <div>
<form method="get" action="" class="flex flex-col gap-4">
    <input
        type="text"
        name="name"
        value="{{ request('name') }}"
        placeholder="Rechercher un produit"
        class="border p-2 rounded"
    >
    <button>cherhcer</button>
</form>


    </div>
    <div class="m-3">
        @foreach ($products as $product )
            <div class="border-2 m-1 p-1 ">
                <p class="text-xl">{{ $product->name }}</p>
                <p>{{ $product->price }}</p>
                <a href="{{ route('show.product',['product'=>$product]) }}">voir</a>
            </div>
        @endforeach
    </div>
</div>

@endsection
