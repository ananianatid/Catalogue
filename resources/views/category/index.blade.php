@extends('base')
@section('title', 'Be market ')
@section('content')
    <div class="grid grid-cols-4 gap-4">
        @foreach ($categories as $category )
            @include('shared.card2', ['category' => $category])
        @endforeach
    </div>
@endsection
