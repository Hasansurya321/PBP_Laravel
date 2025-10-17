@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-6">
  {{-- Kartu Selamat Datang --}}
  <div class="bg-white rounded-2xl shadow p-4 mb-6">
    <h5>Selamat datang, {{ Auth::user()->name }} 👋</h5>
  </div>

  {{-- Judul Bagian Produk --}}
  <h2 class="text-xl font-semibold mb-1">Discover Our Products</h2>
  <p class="text-gray-600 mb-4">Explore our curated collection of amazing items.</p>

  {{-- Partial Grid Produk --}}
  @include('products._cards', ['products' => $products])

  {{-- Pagination --}}
  <div class="mt-6">
    {{ $products->links() }}
  </div>
</div>
@endsection
