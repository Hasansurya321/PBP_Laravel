@extends('layouts.app')

@section('content')

<div class="bg-gradient-to-br from-blue-50 via-white to-purple-50 min-h-screen">
    <!-- Header Section -->
    <div class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto py-12 px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-3">
                    Discover Our Products
                </h1>
                <p class="text-gray-600 text-lg">Explore our curated collection of amazing items</p>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="max-w-7xl mx-auto py-12 px-4">
        {{-- Grid Produk (pakai partial) --}}
        @include('products._cards', ['products' => $products])

        {{-- Pagination --}}
        <div class="mt-6">
            {{ $products->links() }}
        </div>
    </div>
</div>

@endsection
