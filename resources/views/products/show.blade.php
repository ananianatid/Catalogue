@extends('base')

@section('title', 'Be market')

@section('content')
<div class="min-h-screen flex flex-col items-start justify-start bg-gray-50 py-6">
    {{-- Contenu principal produit --}}
    <div class="w-full max-w-6xl mx-auto p-6 bg-white shadow-md rounded-xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Colonne images --}}
            <div class="flex flex-col items-center">
            {{-- Image avec ratio 3/4 --}}
            <div class="aspect-[3/4] w-full max-w-md mx-auto mb-4">
                <img
                    id="mainProductImage"
                    src="{{ $product->images && count($product->images) > 0 ? asset('storage/' . $product->images[0]) : asset('storage/uploads/images/no_visual.png') }}"
                    alt="Image principale de {{ $product->name }}"
                    class="w-full h-full object-cover rounded-lg shadow transition-all duration-200"
                >
            </div>



                {{-- Miniatures --}}
                <div class="flex gap-2 mt-2 flex-wrap justify-center">
                    @if ($product->images && count($product->images) > 0)
                        @foreach ($product->images as $img)
                            <img
                                src="{{ asset('storage/' . $img) }}"
                                alt="Miniature de {{ $product->name }}"
                                class="w-20 h-20 object-cover rounded-md border cursor-pointer transition hover:ring-2 hover:ring-purple-500"
                                onclick="document.getElementById('mainProductImage').src = '{{ asset('storage/' . $img) }}'"
                            >
                        @endforeach
                    @else
                        <p class="text-gray-400">Aucune image disponible.</p>
                    @endif
                </div>
            </div>

            {{-- Colonne infos produit --}}
            <div class="flex flex-col justify-start">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">{{ $product->name }}</h2>

                    {{-- Boutons marque / catégorie --}}
                    <div class="my-2 flex gap-2">
                        <a href="{{ route('show.brand', ['brand' => $product->brand->name]) }}">
                            <button class="btn btn-soft btn-primary">{{ $product->brand->name }}</button>
                        </a>
                        <a href="{{ route('show.category', ['category' => $product->category]) }}">
                            <button class="btn btn-soft btn-secondary">{{ $product->category->name }}</button>
                        </a>
                    </div>

                    {{-- Infos texte --}}
                    <p class="text-lg text-gray-700"><span class="font-semibold">Prix :</span> {{ number_format($product->price, 0, ',', ' ') }} FCFA</p>
                    <p class="text-lg text-gray-700"><span class="font-semibold">Stock :</span> {{ $product->stock }}</p>
                    <p class="text-sm text-gray-400 mt-2">SKU : {{ $product->sku ?? 'N/A' }}</p>

                    <p class="text-sm mt-1">
                        <span class="inline-block px-2 py-1 rounded text-xs font-semibold
                            {{ $product->is_active ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ $product->is_active ? 'En vente' : 'Non disponible' }}
                        </span>
                    </p>

                    <p class="text-sm mt-1">
                        <span class="inline-block px-2 py-1 rounded text-xs font-semibold
                            {{ $product->is_featured ? 'bg-blue-100 text-blue-700' : 'bg-gray-200 text-gray-600' }}">
                            {{ $product->is_featured ? 'Mis en avant' : 'Standard' }}
                        </span>
                    </p>

                    @if($product->discount_percent)
                        <p class="text-sm text-orange-600 mt-1">
                            Réduction : -{{ $product->discount_percent }}%
                        </p>
                    @endif
                </div>

                {{-- Bouton WhatsApp --}}
                <a
                    class="mt-6"
                    href="https://wa.me/22870076829?text=Bonjour%2C%20je%20souhaite%20acheter%20ce%20produit%20%3A%20{{ urlencode(request()->getSchemeAndHttpHost() . '/product/' . $product->slug) }}"
                    target="_blank"
                >
                    <button class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                        Acheter
                    </button>
                </a>

                {{-- Description --}}
                <div class="text-gray-600 my-4 prose max-w-none">
                    @if (!empty($product->description))
                        @markdown($product->description)
                    @else
                        <p>Aucune description disponible.</p>
                    @endif
                </div>

            </div>
        </div>

        {{-- Fiche technique --}}
        <div class=" mx-auto mt-8 p-6 bg-gray-100 shadow rounded-xl">
            <h3 class="text-2xl font-semibold mb-4 text-gray-800">Fiche technique</h3>
            <div class="prose max-w-none">
                @if (!empty($product->tech_sheet))
                    @markdown($product->tech_sheet)
                @else
                    <span class="text-gray-400">Aucune fiche technique disponible.</span>
                @endif
            </div>
        </div>
    </div>



    {{-- Produits même marque --}}
    <div class="w-full max-w-6xl mx-auto mt-10 p-4 border-t">
        <div class="flex justify-between items-center my-4">
            <h4 class="text-2xl text-gray-800">Autres produits {{ $product->brand->name }}</h4>
            <a href="{{ route('show.brand', ['brand' => $product->brand]) }}">
                <button class="btn btn-soft btn-success">Voir tout</button>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($same_brand_products as $same_brand_product)
                @include('shared.card', ['product' => $same_brand_product])
            @endforeach
        </div>
    </div>

    {{-- Produits même catégorie --}}
    <div class="w-full max-w-6xl mx-auto mt-10 p-4 border-t">
        <div class="flex justify-between items-center my-4">
            <h4 class="text-2xl text-gray-800">Autres produits dans {{ $product->category->name }}</h4>
            <a href="{{ route('show.category', ['category' => $product->category]) }}">
                <button class="btn btn-soft btn-success">Voir tout</button>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($same_category_products as $same_category_product)
                @include('shared.card', ['product' => $same_category_product])
            @endforeach
        </div>
    </div>
</div>
@endsection
