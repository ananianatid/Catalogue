@extends('base')
@section('title', 'Catalogues des marques ')
@section('content')
    <h1 class="text-2xl lg:text-4xl lg:my-2 font-bold mb-4 w-full flex justify-center items-center bg-slate-200 py-2">Nos marques</h1>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
        @foreach ($brands as $brand)
            @include('shared.brand_card', ['brand' => $brand])
        @endforeach
    </div>

@endsection
