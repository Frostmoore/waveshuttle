<x-site-layout title="Wave Shuttle – Discografia">
    <section class="bg-slate-950">
        <div class="max-w-6xl mx-auto px-4 py-16 md:py-20">
            {{-- HEADER PAGINA --}}
            <header class="mb-10 text-center space-y-4">
                <p class="text-[11px] tracking-[0.32em] uppercase text-slate-500">
                    Wave Shuttle Studio
                </p>
                <h1 class="text-3xl md:text-4xl font-semibold uppercase tracking-[0.28em]">
                    Discografia
                </h1>
                <p class="text-sm md:text-base text-slate-300 max-w-2xl mx-auto">
                    Una selezione di progetti passati, EP, singoli e album che sono passati
                    dentro il sistema Wave Shuttle: mix, master o full production.
                </p>
            </header>

            {{-- GRID RELEASES --}}
            <div class="grid gap-8 md:grid-cols-3">
                {{-- Release 1 --}}
                <article class="bg-slate-900/70 rounded-3xl border border-slate-800/80 p-5 flex flex-col gap-4">
                    <div class="aspect-square rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                        <img
                            src="{{ asset('storage/images/disc-release-1.png') }}"
                            alt="Orbiting Lights"
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="space-y-1">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em]">
                            Orbiting Lights
                        </h2>
                        <p class="text-[11px] uppercase tracking-[0.18em] text-cyan-300">
                            EP • Mix &amp; Master
                        </p>
                    </div>

                    <p class="text-xs text-slate-400">
                        Synth, voci stratificate e batterie elettroniche pensate per lo streaming,
                        con un low-end che resta sotto controllo anche su casse piccole.
                    </p>

                    {{-- Disco d'oro per stream --}}
                    <div class="mt-2 flex items-center justify-between text-[11px] text-slate-500">
                        <span>2024 • Alt / Electronic</span>
                        <div class="flex items-center gap-1 text-yellow-400">
                            {{-- ~300k stream → 3 dischi --}}
                            <i class="fa-solid fa-record-vinyl"></i>
                            <i class="fa-solid fa-record-vinyl"></i>
                            <i class="fa-solid fa-record-vinyl"></i>
                            <span class="ml-1 text-[10px] text-yellow-300/90">
                                ~300k streams
                            </span>
                        </div>
                    </div>
                </article>

                {{-- Release 2 --}}
                <article class="bg-slate-900/70 rounded-3xl border border-slate-800/80 p-5 flex flex-col gap-4">
                    <div class="aspect-square rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                        <img
                            src="{{ asset('storage/images/disc-release-2.png') }}"
                            alt="Static Garden"
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="space-y-1">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em]">
                            Static Garden
                        </h2>
                        <p class="text-[11px] uppercase tracking-[0.18em] text-cyan-300">
                            Album • Mastering
                        </p>
                    </div>

                    <p class="text-xs text-slate-400">
                        Album chitarroso ma controllato, con dinamica conservata e una traduzione
                        coerente tra vinile, digitale e live playback.
                    </p>

                    <div class="mt-2 flex items-center justify-between text-[11px] text-slate-500">
                        <span>2023 • Alt Rock</span>
                        <div class="flex items-center gap-1 text-yellow-400">
                            {{-- ~500k stream → 5 dischi --}}
                            <i class="fa-solid fa-record-vinyl"></i>
                            <i class="fa-solid fa-record-vinyl"></i>
                            <i class="fa-solid fa-record-vinyl"></i>
                            <i class="fa-solid fa-record-vinyl"></i>
                            <i class="fa-solid fa-record-vinyl"></i>
                            <span class="ml-1 text-[10px] text-yellow-300/90">
                                ~500k streams
                            </span>
                        </div>
                    </div>
                </article>

                {{-- Release 3 --}}
                <article class="bg-slate-900/70 rounded-3xl border border-slate-800/80 p-5 flex flex-col gap-4">
                    <div class="aspect-square rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                        <img
                            src="{{ asset('storage/images/disc-release-3.png') }}"
                            alt="Neon Fragments"
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="space-y-1">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em]">
                            Neon Fragments
                        </h2>
                        <p class="text-[11px] uppercase tracking-[0.18em] text-cyan-300">
                            Single • Full Production
                        </p>
                    </div>

                    <p class="text-xs text-slate-400">
                        Produzione, sound design e mix: un singolo costruito per reggere la
                        ripetizione da playlist senza diventare faticoso.
                    </p>

                    <div class="mt-2 flex items-center justify-between text-[11px] text-slate-500">
                        <span>2022 • Pop / Electronic</span>
                        <div class="flex items-center gap-1 text-yellow-400">
                            {{-- ~200k stream → 2 dischi --}}
                            <i class="fa-solid fa-record-vinyl"></i>
                            <i class="fa-solid fa-record-vinyl"></i>
                            <span class="ml-1 text-[10px] text-yellow-300/90">
                                ~200k streams
                            </span>
                        </div>
                    </div>
                </article>
            </div>

            {{-- NOTA FINALE / CTA --}}
            <div class="mt-12 text-center text-xs md:text-[13px] text-slate-400">
                Questa è solo una selezione. Se vuoi ascoltare qualcosa di vicino al tuo progetto,
                <a href="mailto:info@waveshuttle.studio" class="text-cyan-300 hover:text-cyan-200 underline underline-offset-2">
                    scrivi a Patrick
                </a>
                e ti manda qualche riferimento mirato.
            </div>
        </div>
    </section>
</x-site-layout>
