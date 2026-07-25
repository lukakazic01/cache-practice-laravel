<div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm hover:shadow-md transition-shadow">
    <h3 class="text-lg font-semibold text-gray-900">
        {{ $product->name }}
    </h3>
    <p class="mt-2 text-sm text-gray-500 line-clamp-3">
        {{ $product->description }}
    </p>
    <div class="mt-4 flex items-center justify-between">
        <span class="text-lg font-bold text-indigo-600">
            ${{ $product->price }}
        </span>
        <button class="rounded-lg bg-indigo-600 px-3.5 py-2 text-xs font-semibold text-white hover:bg-indigo-700 transition-colors">
            View
        </button>
    </div>
</div>
