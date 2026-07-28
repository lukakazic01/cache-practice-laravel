@aware(['name','required', 'hasError'])
@props(['value'])

<input
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ old($name, $value ?? '') }}"
    @if ($required) required @endif
    {{
        $attributes
            ->class([
                'w-full rounded-lg border border-gray-300 px-3.5 py-2.5 text-sm text-gray-900 placeholder-gray-400
                focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500',
                'border-red-400 focus:ring-red-400 focus:border-red-400' => $hasError || $errors->has($name),
            ])
            ->merge([
                'type' => 'text',
            ])
    }}
/>
