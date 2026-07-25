<x-layout>
    <x-slot:title>Home</x-slot:title>
    @if (session('success'))
        <div class="mb-6 rounded-xl border border-green-200 bg-green-50 p-4 text-sm text-green-800">
            {{ session('success') }}
        </div>
    @endif
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</x-layout>
