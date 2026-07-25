<x-layout>
    <x-slot:title>Create Product</x-slot:title>
    <div class="max-w-xl mx-auto">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Create Product</h1>
            <p class="text-sm text-gray-500 mt-1">Fill in the details below to add a new product.</p>
        </div>
        @if (session('success'))
            <div class="mb-6 rounded-xl border border-green-200 bg-green-50 p-4 text-sm text-green-800">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('products.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">
                    Product Name
                </label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name') }}"
                    placeholder="e.g. Wireless Mouse"
                    class="w-full rounded-lg border border-gray-300 px-3.5 py-2.5 text-sm text-gray-900 placeholder-gray-400
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                           @error('name') border-red-400 focus:ring-red-400 focus:border-red-400 @enderror"
                >
                @error('name')
                    <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1.5">
                    Description
                </label>
                <textarea
                    name="description"
                    id="description"
                    rows="5"
                    placeholder="Describe the product..."
                    class="w-full rounded-lg border border-gray-300 px-3.5 py-2.5 text-sm text-gray-900 placeholder-gray-400 resize-none
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                           @error('description') border-red-400 focus:ring-red-400 focus:border-red-400 @enderror"
                >{{ old('description') }}</textarea>
                @error('description')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-1.5">
                    Price
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-sm text-gray-400">
                        $
                    </span>
                    <input
                        type="number"
                        name="price"
                        id="price"
                        value="{{ old('price') }}"
                        min="0"
                        step="1"
                        placeholder="0"
                        class="w-full rounded-lg border border-gray-300 pl-7 pr-3.5 py-2.5 text-sm text-gray-900 placeholder-gray-400
                               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                               @error('price') border-red-400 focus:ring-red-400 focus:border-red-400 @enderror"
                    >
                </div>
                @error('price')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ url()->previous() }}" class="px-4 py-2.5 text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors">
                    Cancel
                </a>
                <button
                    type="submit"
                    class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white
                           hover:bg-indigo-700 active:bg-indigo-800 transition-colors shadow-sm"
                >
                    Create Product
                </button>
            </div>

        </form>
    </div>

</x-layout>
