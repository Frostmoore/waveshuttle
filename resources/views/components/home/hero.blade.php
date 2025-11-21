<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-slate-950 border-t-0">
    {{-- BACKGROUND IMAGE + OVERLAY --}}
    <div class="absolute inset-0">
        <img
            src="{{ asset('storage/images/waveshuttle-studio-hero.png') }}"
            alt="Wave Shuttle Studio"
            class="w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-slate-950/70"></div>

        {{-- GLOWS --}}
        <div class="absolute -top-24 left-1/2 -translate-x-1/2 h-72 w-72 rounded-full bg-cyan-400/25 blur-3xl"></div>
        <div class="absolute bottom-[-4rem] right-[-4rem] h-80 w-80 rounded-full bg-sky-500/25 blur-3xl"></div>
    </div>

    {{-- CONTENUTO CENTRATO --}}
    <div class="relative z-10 max-w-3xl mx-auto px-4 text-center space-y-8">
        <div class="space-y-4">
            {{-- LOGO AL POSTO DI "WAVE SHUTTLE" --}}
            <div class="flex justify-center">
                <img
                    src="{{ asset('storage/images/waveshuttle-logo.png') }}"
                    alt="Wave Shuttle Logo"
                    class="max-w-xs md:max-w-sm w-full"
                >
            </div>

            <p class="text-xs md:text-sm tracking-[0.3em] uppercase text-slate-200">
                The Future of Sound
            </p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
            <a href="#booking"
               class="inline-flex items-center justify-center px-6 py-2.5 rounded-full
                        text-[11px] font-semibold uppercase tracking-[0.22em]
                        border border-cyan-400/70 text-cyan-300 bg-transparent
                        transition
                        hover:bg-cyan-400 hover:text-slate-950 hover:border-cyan-400
                        hover:shadow-[0_0_40px_rgba(34,211,238,0.55)]">
                Book Mix &amp; Master
            </a>

            <a href="#studio"
               class="inline-flex items-center justify-center px-6 py-2.5 rounded-full
                        text-[11px] font-semibold uppercase tracking-[0.22em]
                        border border-cyan-400/70 text-cyan-300 bg-transparent
                        transition
                        hover:bg-cyan-400 hover:text-slate-950 hover:border-cyan-400
                        hover:shadow-[0_0_40px_rgba(34,211,238,0.55)]">
                Explore Wave Systems
            </a>
        </div>
    </div>
</section>
