@extends('base')
@section('title', 'Be market ')
@section('content')
{{-- {{ dd($results) }} --}}
<div>
    <div>
<form method="get" action="" class="flex flex-col gap-4">

    {{-- Marque --}}
    <select id="brands" name="brand" class="border p-2" onchange="this.form.submit()">
        <option value="">Toutes les marques</option>
        @foreach ($brands as $brand)
            <option value="{{ $brand->id }}" {{ request('brand') == $brand->id ? 'selected' : '' }}>
                {{ $brand->name }}
            </option>
        @endforeach
    </select>

    {{-- Catégorie --}}
    <select id="category" name="category" class="border p-2" onchange="this.form.submit()">
        <option value="">Toutes les catégories</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    {{-- Tri par prix --}}
    <fieldset class="flex gap-4" onchange="this.form.submit()">
        <label>
            <input type="radio" name="price_order" value="asc" {{ request('price_order') == 'asc' ? 'checked' : '' }}>
            Prix croissant
        </label>
        <label>
            <input type="radio" name="price_order" value="desc" {{ request('price_order') == 'desc' ? 'checked' : '' }}>
            Prix décroissant
        </label>
    </fieldset>

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
