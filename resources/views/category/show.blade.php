@extends('base')
@section('title', 'Be market ')
@section('content')
    @foreach ($products as $product )
        @include('shared.card', ['product' => $product])
    @endforeach
@endsection
