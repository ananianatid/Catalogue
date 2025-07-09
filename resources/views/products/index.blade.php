@extends('base')
@section('title', 'Catalogue des produits')
@section('content')
{{-- {{ dd($results) }} --}}
<div>
    <div class="w-full flex flex-col items-center">
        <form method="get" action="" class="flex gap-4 justify-center items-center">
            {{-- Recherche par mot-clé --}}

            <div class="flex gap-4">
                {{-- Recherche par mot-clé --}}
                {{-- Recherche --}}
                {{-- Marque --}}
                <select id="brands" name="brand" class="select" onchange="this.form.submit()">
                    <option value="">Toutes les marques</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ request('brand') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>

                {{-- Catégorie --}}
                <select id="category" name="category" class="select" onchange="this.form.submit()">
                    <option value="">Toutes les catégories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Tri par prix --}}
            <fieldset class="flex gap-4" onchange="this.form.submit()">
                <label>
                    <input type="radio" name="price_order" class="radio radio-primary" value="asc" {{ request('price_order') == 'asc' ? 'checked' : '' }}>
                    Prix croissant
                </label>
                <label>
                    <input type="radio" name="price_order" class="radio radio-primary" value="desc" {{ request('price_order') == 'desc' ? 'checked' : '' }}>
                    Prix décroissant
                </label>
            </fieldset>

        </form>
    </div>

    <div class="m-3">
        @foreach ($products as $product )
            @include('shared.card', ['product' => $product])
        @endforeach
    </div>
</div>

@endsection
