@extends('base')
@section('title', 'Be market ')
@section('content')
    @foreach ($categories as $category )
        <div class="m-1 p-1 border-2">
            <img
                class="object-contain border-2 border-gray-300 rounded-md h-48 w-40 shadow-sm"
                src="{{ $category->image_url ?? 'https://via.placeholder.com/160x192?text=No+Image' }}"
                alt="{{ $category->name }}"
            >
            <p>
                {{ $category->name }}
            </p>
            <a href="{{ route('show.category',['category'=>$category]) }}">voir</a>
        </div>
    @endforeach
@endsection
