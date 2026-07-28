<button
    {{ $attributes->merge(['type' => 'button'])->class([
        'inline-flex items-center justify-center gap-2 rounded-lg px-5 py-2.5 text-sm font-semibold text-white
        bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 transition-colors duration-150 outline-none cursor-pointer shadow-sm',
    ]) }}
>
    {{ $slot }}
</button>
