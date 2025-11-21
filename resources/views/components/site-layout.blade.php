<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Wave Shuttle – The Future of Sound' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Font Ubuntu --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=ubuntu:400,500,700&display=swap"
        rel="stylesheet"
    />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-50 antialiased font-sans">
    <div class="min-h-screen flex flex-col">

        {{-- HEADER --}}
        <header class="border-b border-slate-800/80 bg-slate-950/80 backdrop-blur">
            <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between gap-4">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <span class="text-xs tracking-[0.45em] uppercase text-cyan-300/90">
                        WAVE SHUTTLE
                    </span>
                </a>

                <nav class="hidden md:flex items-center gap-6 text-xs tracking-[0.25em] uppercase text-slate-400">
                    <a href="#studio" class="hover:text-cyan-300 transition">Studio</a>
                    <a href="#patrick" class="hover:text-cyan-300 transition">Patrick Wave</a>
                    <a href="#booking" class="hover:text-cyan-300 transition">Booking</a>
                </nav>
            </div>
        </header>

        {{-- CONTENUTO --}}
        <main class="flex-1">
            {{ $slot }}
        </main>

        {{-- FOOTER --}}
        <footer class="border-t border-slate-800/80 bg-slate-950 border-t-0">
            <div class="max-w-6xl mx-auto px-4 py-6 text-xs text-slate-500 flex flex-col md:flex-row gap-2 md:gap-4 justify-between">
                <p>© {{ date('Y') }} Wave Shuttle Studio. All rights reserved.</p>
                <p class="text-slate-600">Mixed & designed somewhere between code and sound.</p>
            </div>
        </footer>
    </div>
</body>
</html>
