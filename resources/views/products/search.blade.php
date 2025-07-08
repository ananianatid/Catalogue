@extends('base')
@section('title', 'Be market ')
@section('content')
{{-- {{ dd($results) }} --}}
<div class="m-3">
    <div>
        <form method="get" action="" class="flex  gap-2 justify-between items-center">
            {{-- Recherche par mot-clé --}}
            <input
                type="text"
                name="name"
                value="{{ request('name') }}"
                placeholder="Rechercher un produit"
                class="border p-2 rounded w-full"
            >
            <button class="btn btn-soft w-fit">cherhcer</button>
        </form>
    </div>

    <div class="lg:grid lg:grid-cols-2 lg:gap-2">
        @foreach ($products as $product )
            @include('shared.card', ['product' => $product])
        @endforeach
    </div>
</div>

@endsection
