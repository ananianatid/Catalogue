@extends('base')
@section('title', 'Be market ')
@section('content')
<div class=" bg-slate-100">
    <div class="bg-slate-100">
        <h1 class="text-2xl lg:text-4xl lg:my-2 font-bold mb-4 w-full flex justify-center items-center bg-slate-200 py-2">Promotions</h1>
        <div class="flex items-center justify-center mb-4 px-10 w-full">
            <img src="https://images.unsplash.com/photo-1607083206968-13611e3d76db?q=80&w=1815&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""
            class="lg:w-1/2 sm:w-full aspect-3/4 object-cover rounded-box">
        </div>
    </div>
    <div class="px-3">
        @if($products->isEmpty())
            <p>Aucune promotion en cours.</p>
        @else
            @foreach ($products as $product)
                @include('shared.card', ['product' => $product])
            @endforeach
        @endif
    </div>
</div>
@endsection

