@extends('base')
@section('title', 'Be market ')
@section('content')
    <div class="grid grid-cols-4 gap-4">
        @foreach ($brands as $brand )
            @include('shared.card2', ['brand' => $brand])
        @endforeach
    </div>
@endsection
