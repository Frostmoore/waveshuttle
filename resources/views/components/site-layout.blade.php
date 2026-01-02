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

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/11dce758f8.js" crossorigin="anonymous"></script>

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

                {{-- NAV DESKTOP --}}
                <nav class="hidden md:flex items-center gap-6 text-xs tracking-[0.25em] uppercase text-slate-400">
                    <a href="{{ route('home') }}#studio" class="hover:text-cyan-300 transition">Studio</a>
                    <a href="{{ route('home') }}#patrick" class="hover:text-cyan-300 transition">Patrick Wave</a>
                    <a href="{{ route('team') }}" class="hover:text-cyan-300 transition">Team</a>
                    <a href="{{ route('studios') }}" class="hover:text-cyan-300 transition">Studios</a>
                    <a href="{{ route('discografia') }}" class="hover:text-cyan-300 transition">Discografia</a>
                    <a href="{{ route('booking') }}" class="hover:text-cyan-300 transition">Booking</a>
                </nav>

                {{-- TOGGLE MOBILE --}}
                <button
                    id="mobile-menu-toggle"
                    class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-full border border-cyan-400/80 bg-slate-900 text-cyan-300 hover:bg-slate-900/80 hover:border-cyan-300 hover:text-cyan-200 shadow-[0_0_12px_rgba(34,211,238,0.45)] transition"
                    type="button"
                    aria-label="Apri menù"
                >
                    <span class="sr-only">Apri/chiudi menù</span>
                    <i class="fa-solid fa-bars text-lg" id="mobile-menu-icon"></i>
                </button>
            </div>

            {{-- NAV MOBILE --}}
            <div
                id="mobile-menu"
                class="md:hidden ws-mobile-menu border-t border-slate-800/80 bg-slate-950/95 backdrop-blur-sm"
            >
                <nav class="max-w-6xl mx-auto px-4 py-4 flex flex-col gap-3 text-[11px] tracking-[0.28em] uppercase text-slate-300">
                    <a href="{{ route('home') }}#studio" class="hover:text-cyan-300 transition">
                        Studio
                    </a>
                    <a href="{{ route('home') }}#patrick" class="hover:text-cyan-300 transition">
                        Patrick Wave
                    </a>
                    <a href="{{ route('team') }}" class="hover:text-cyan-300 transition">
                        Team
                    </a>
                    <a href="{{ route('studios') }}" class="hover:text-cyan-300 transition">
                        Studios
                    </a>
                    <a href="{{ route('discografia') }}" class="hover:text-cyan-300 transition">
                        Discografia
                    </a>
                    <a href="{{ route('booking') }}" class="hover:text-cyan-300 transition">
                        Booking
                    </a>
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
