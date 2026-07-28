<x-layout>
    <x-slot:title>Create Product</x-slot:title>
    <div class="max-w-xl mx-auto">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Create Product</h1>
            <p class="text-sm text-gray-500 mt-1">Fill in the details below to add a new product.</p>
        </div>
        <form action="{{ route('products.store') }}" method="POST" class="space-y-6">
            @csrf
            <x-forms.field name="name" required>
                <x-forms.label>Name of product</x-forms.label>
                <x-forms.input :value="old('name', '')" />
                <x-forms.error-message />
            </x-forms.field>
            <x-forms.field name="description" required>
                <x-forms.label>Description</x-forms.label>
                <x-forms.textarea :value="old('name', '')" />
                <x-forms.error-message />
            </x-forms.field>
            <x-forms.field name="price" required class="relative">
                <x-forms.label>Price</x-forms.label>
                <x-forms.input type="number" :value="old('price', '')" />
                <x-forms.error-message />
            </x-forms.field>
            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ url()->previous() }}" class="px-4 py-2.5 text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors">
                    Cancel
                </a>
                <x-base.button type="submit">Submit</x-base.button>
            </div>
        </form>
    </div>
</x-layout>
