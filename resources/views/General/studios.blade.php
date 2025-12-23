<x-site-layout title="Wave Shuttle – Studi">
    <section class="bg-slate-950">
        <div class="max-w-6xl mx-auto px-4 py-16 md:py-20">
            {{-- HEADER PAGINA --}}
            <header class="mb-10 text-center space-y-4">
                <p class="text-[11px] tracking-[0.32em] uppercase text-slate-500">
                    Wave Shuttle Studio
                </p>
                <h1 class="text-3xl md:text-4xl font-semibold uppercase tracking-[0.28em]">
                    Studi
                </h1>
                <p class="text-sm md:text-base text-slate-300 max-w-2xl mx-auto">
                    Le diverse stanze del sistema Wave Shuttle: ogni ambiente è pensato per un tipo
                    preciso di lavoro, dal mix chirurgico alle take vocali.
                </p>
            </header>

            {{-- GRID STUDI CON ANIMAZIONE COME TEAM --}}
            <div class="ws-studios-grid">
                {{-- Studio 1 --}}
                <article
                    class="ws-studio-card bg-slate-900/70 rounded-3xl border border-slate-800/80 p-6 flex flex-col items-center text-center gap-4"
                    data-studio-card="control-room"
                >
                    <div class="w-28 h-28 rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                        <img
                            src="{{ asset('storage/images/studio-control-thumb.png') }}"
                            alt="Control Room"
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="space-y-1">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em]">
                            Main Control Room
                        </h2>
                        <p class="text-[11px] uppercase tracking-[0.18em] text-cyan-300">
                            Mix &amp; Master
                        </p>
                    </div>

                    <p class="text-xs text-slate-400">
                        Punto centrale del sistema: monitoring controllato, chain ibrida e sessioni di mix.
                    </p>

                    {{-- DETTAGLIO ESPANDIBILE --}}
                    <div class="ws-studio-card-detail">
                        <div class="mt-4 w-full aspect-video rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                            <img
                                src="{{ asset('storage/images/studio-control-detail.png') }}"
                                alt="Main Control Room"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <p class="mt-3 text-xs text-slate-300">
                            Stanza principale con monitoring calibrato, posizione d’ascolto precisa e routing
                            ibrido: hardware dove serve, resto in-the-box per recall veloci e revisioni senza
                            drammi.
                        </p>
                    </div>
                </article>

                {{-- Studio 2 --}}
                <article
                    class="ws-studio-card bg-slate-900/70 rounded-3xl border border-slate-800/80 p-6 flex flex-col items-center text-center gap-4"
                    data-studio-card="vocal-booth"
                >
                    <div class="w-28 h-28 rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                        <img
                            src="{{ asset('storage/images/studio-vocal-thumb.png') }}"
                            alt="Vocal Booth"
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="space-y-1">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em]">
                            Vocal Booth
                        </h2>
                        <p class="text-[11px] uppercase tracking-[0.18em] text-cyan-300">
                            Voci &amp; Dettagli
                        </p>
                    </div>

                    <p class="text-xs text-slate-400">
                        Piccola, trattata e cattiva il giusto: ideale per vocali, doppiaggi e dettagli.
                    </p>

                    <div class="ws-studio-card-detail">
                        <div class="mt-4 w-full aspect-video rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                            <img
                                src="{{ asset('storage/images/studio-vocal-detail.png') }}"
                                alt="Vocal Booth – interno"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <p class="mt-3 text-xs text-slate-300">
                            Booth trattato per avere una risposta controllata, niente riflessi a caso e una catena
                            microfonica pensata per stare bene già in rough mix.
                        </p>
                    </div>
                </article>

                {{-- Studio 3 --}}
                <article
                    class="ws-studio-card bg-slate-900/70 rounded-3xl border border-slate-800/80 p-6 flex flex-col items-center text-center gap-4"
                    data-studio-card="hybrid-room"
                >
                    <div class="w-28 h-28 rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                        <img
                            src="{{ asset('storage/images/studio-hybrid-thumb.png') }}"
                            alt="Hybrid Room"
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="space-y-1">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em]">
                            Hybrid Room
                        </h2>
                        <p class="text-[11px] uppercase tracking-[0.18em] text-cyan-300">
                            Sound Design
                        </p>
                    </div>

                    <p class="text-xs text-slate-400">
                        Stanza per sperimentare: synth, texture, sound design e pre-produzione.
                    </p>

                    <div class="ws-studio-card-detail">
                        <div class="mt-4 w-full aspect-video rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                            <img
                                src="{{ asset('storage/images/studio-hybrid-detail.png') }}"
                                alt="Hybrid Room – setup"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <p class="mt-3 text-xs text-slate-300">
                            Qui si costruiscono texture, layering di synth, FX strani e tutto quello che poi
                            viene rifinito nella control room principale.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
</x-site-layout>
