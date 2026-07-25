<x-layout>
    <x-slot:title>Home</x-slot:title>
    @if (session('success'))
        <div class="mb-6 rounded-xl border border-green-200 bg-green-50 p-4 text-sm text-green-800">
            {{ session('success') }}
        </div>
    @endif
    <p>Products</p>
</x-layout>
