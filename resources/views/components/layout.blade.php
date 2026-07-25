<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    @vite(['/resources/css/app.css', '/resources/js/app.js'])
</head>
<body class="h-full flex flex-col font-sans antialiased text-gray-800">

    <header class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="{{ url('/') }}" class="flex items-center gap-2 font-bold text-lg text-gray-900">
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-indigo-600 text-white">
                        P
                    </span>
                    Products
                </a>
                <nav class="hidden sm:flex items-center gap-6 text-sm font-medium text-gray-600">
                    <a href="{{ url('/') }}" class="hover:text-indigo-600 transition-colors">Home</a>
                    <a href="{{ url('/about') }}" class="hover:text-indigo-600 transition-colors">About</a>
                    <a href="{{ url('/contact') }}" class="hover:text-indigo-600 transition-colors">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-1">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 sm:p-8">
                {{ $slot }}
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
                <div class="flex items-center gap-4">
                    <a href="#" class="hover:text-indigo-600 transition-colors">Privacy</a>
                    <a href="#" class="hover:text-indigo-600 transition-colors">Terms</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
