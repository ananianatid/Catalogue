<?php
$brand = $brand;
?>

<div class="card bg-base-100 shadow-sm">
  <figure class="px-10 pt-10 w-full">
    <div class="w-full aspect-square relative overflow-hidden rounded-xl">
      <img
        src="{{ $brand->image_url ?? 'https://via.placeholder.com/400x400?text=No+Image' }}"
        alt="{{ $brand->name }}"
        class="absolute inset-0 w-full h-full object-cover" />
    </div>
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">{{ $brand->name }}</h2>
    {{-- <p>{{ $info->description }}</p> --}}
    <div class="card-actions">
      <a href="{{ route('show.brand',['brand'=> $brand]) }}">
        <button class="btn btn-primary">Voir</button>
      </a>
    </div>
  </div>
</div>
