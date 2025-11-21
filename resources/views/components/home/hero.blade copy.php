<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-slate-950">
    {{-- BACKGROUND IMAGE + OVERLAY --}}
    <div class="absolute inset-0">
        <img
            src="{{ asset('/storage/images/waveshuttle-studio-hero.png') }}"
            alt="Wave Shuttle Studio"
            class="w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-slate-950/70"></div>

        {{-- GLOWS --}}
        <div class="absolute -top-24 left-1/2 -translate-x-1/2 h-72 w-72 rounded-full bg-cyan-400/25 blur-3xl"></div>
        <div class="absolute bottom-[-4rem] right-[-4rem] h-80 w-80 rounded-full bg-sky-500/25 blur-3xl"></div>
    </div>

    {{-- CONTENUTO CENTRATO VERTICALE + ORIZZONTALE --}}
    <div class="relative z-10 max-w-3xl mx-auto px-4 text-center space-y-8">
        <div class="space-y-4">
            <p class="text-[11px] tracking-[0.4em] uppercase text-cyan-300/90">
                Wave Shuttle Studio
            </p>

            <h1 class="text-3xl md:text-5xl font-semibold tracking-[0.35em] uppercase">
                WAVE SHUTTLE
            </h1>

            <p class="text-xs md:text-sm tracking-[0.3em] uppercase text-slate-300">
                The Future of Sound
            </p>
        </div>

        <p class="text-sm md:text-base text-slate-100/90 max-w-2xl mx-auto">
            Mix, mastering e sound design per chi vuole un suono preciso, cattivo e pronto a sopravvivere
            alle piattaforme. Carichi le tracce, Wave Shuttle le manda in orbita senza perdere controllo.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
            <a href="#booking"
               class="inline-flex items-center justify-center px-6 py-2.5 rounded-full text-[11px] font-semibold uppercase tracking-[0.26em] bg-cyan-400 text-slate-950 hover:bg-cyan-300 transition shadow-[0_0_40px_rgba(34,211,238,0.55)]">
                Book Mix & Master
            </a>

            <a href="#studio"
               class="inline-flex items-center justify-center px-6 py-2.5 rounded-full text-[11px] font-semibold uppercase tracking-[0.26em] border border-cyan-400/70 text-cyan-300 hover:bg-cyan-400/10 transition">
                Explore Wave Systems
            </a>
        </div>

        <p class="text-[10px] uppercase tracking-[0.3em] text-slate-400 pt-4">
            Hybrid mixing • Recall precisi • Workflow remoto
        </p>
    </div>
</section>
