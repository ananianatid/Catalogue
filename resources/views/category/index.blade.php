@extends('base')
@section('title', 'Be market ')
@section('content')
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
        @foreach ($categories as $category )
            @include('shared.card2', ['category' => $category])
        @endforeach
    </div>
@endsection
