<?php
$product = $product ?? null;
?>

<a href="{{ route('show.product', ['product' => $product]) }}">
    <div class="carousel-item relative aspect-[3/4] h-90 rounded-box overflow-hidden shadow-lg m-2">
        <img
            src="{{ $product->images ? asset('storage/'.$product->images[0]) : asset('storage/uploads/images/no_visual.png') }}"
            alt="{{ $product->name }}"
            class="w-full h-full object-cover rounded-box" />

        <!-- Overlay sombre en bas -->
        <div class="absolute bottom-0 left-0 w-full bg-slate-100/75 text-slate px-2 py-2">
            <h3 class="text-base font-semibold truncate">{{ $product->name }}</h3>

            @if($product->discount_percent > 0 )
                <div class="flex items-center gap-2">
                    <p class="text-sm line-through opacity-70 text-black">
                        {{ number_format($product->price, 0, ',', ' ') }} FCFA
                    </p>
                    <p class="text-sm font-bold text-green-800">
                        {{ number_format($product->price * (1 - $product->discount_percent / 100), 0, ',', ' ') }} FCFA
                    </p>
                    <span class="text-xs bg-green-600 text-white px-1 rounded">
                        -{{ $product->discount_percent }}%
                    </span>
                </div>
            @else
                <p class="text-sm">
                    {{ number_format($product->price, 0, ',', ' ') }} FCFA
                </p>
            @endif
        </div>

    </div>
</a>
