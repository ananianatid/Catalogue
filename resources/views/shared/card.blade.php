<?php
$product = $product ?? null;
?>

@if($product)
<div class="card card-side bg-white shadow-sm w-full h-fit my-2 flex items-center p-1">
    <figure class="aspect-[3/4] h-48 flex-shrink-0 overflow-hidden rounded-md relative">
        <img
            src="{{ $product->images ? asset('storage/'.$product->images[0]) : asset('storage/uploads/images/no_visual.png') }}"
            alt="{{ $product->name }}"
            class="absolute inset-0 w-full h-full object-cover" />
    </figure>


    <div class="card-body flex flex-col justify-between py-2 px-2">
        <div>
            <h2 class="card-title text-base sm:text-base leading-tight">{{ $product->name }}</h2>
            <div class="mt-1 flex flex-col gap-1">
                <span class="badge badge-ghost badge-outline text-xs">
                    {{ optional($product->brand)->name }}
                </span>
                <span class="badge badge-ghost badge-outline text-xs">
                    {{ optional($product->category)->name }}
                </span>
                @if ($product->discount_percent > 0)
                    <div class="badge badge-soft badge-error text-xs"> - {{ $product->discount_percent }}%</div>
                @endif
            </div>
        </div>

        <div class="flex justify-end items-end mt-2">
            <a href="{{ route('show.product', ['product'=> $product]) }}" class="flex flex-col items-end text-right">
                @if ($product->discount_percent > 0)
                    <span class="text-red-500 text-xs line-through">
                        {{ number_format($product->price, 0, ',', ' ') }} F CFA
                    </span>
                    <button class="btn btn-primary btn-sm mt-1">
                        {{ number_format($product->price * (1 - $product->discount_percent / 100), 0, ',', ' ') }} F CFA &nbsp; – &nbsp; Voir
                    </button>
                @else
                    <button class="btn btn-primary btn-sm">
                        {{ number_format($product->price, 0, ',', ' ') }} F CFA &nbsp; – &nbsp; Voir
                    </button>
                @endif
            </a>
        </div>
    </div>
</div>
@endif

