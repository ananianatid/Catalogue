@extends('base')
@section('title', 'Catalogues des categories ')
@section('content')
    <h1 class="text-2xl lg:text-4xl lg:my-2 font-bold mb-4 w-full flex justify-center items-center bg-slate-200 py-2">Nos categories</h1>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
        @foreach ($categories as $category )
            @include('shared.category_card', ['category' => $category])
        @endforeach
    </div>
@endsection
