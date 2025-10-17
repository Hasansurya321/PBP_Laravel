{{-- resources/views/products/_cards.blade.php --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
  @forelse($products as $product)
    <div class="bg-white rounded-2xl shadow overflow-hidden flex flex-col">
      <img
        src="{{ $product->image_url ?? (isset($product->image) ? asset('storage/'.$product->image) : asset('img/placeholder.png')) }}"
        alt="{{ $product->name }}"
        class="w-full aspect-[4/3] object-cover bg-gray-100"
      />
      <div class="p-4 flex flex-col gap-2 flex-1">
        <span class="text-xs px-2 py-1 bg-gray-100 rounded w-fit">
          {{ $product->category->name ?? 'Uncategorized' }}
        </span>
        <h3 class="font-semibold">{{ $product->name }}</h3>
        <p class="text-sm text-gray-600">
          Rp{{ number_format($product->price,0,',','.') }}
        </p>

        <a href="{{ route('products.show', $product) }}"
           class="mt-auto inline-flex items-center justify-center h-10 rounded-xl bg-blue-600 text-white">
          View
        </a>
      </div>
    </div>
  @empty
    <p class="text-gray-500">Belum ada produk.</p>
  @endforelse
</div>
