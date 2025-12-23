<x-site-layout title="Wave Shuttle – Team">
    <section class="bg-slate-950">
        <div class="max-w-6xl mx-auto px-4 py-16 md:py-20">
            {{-- HEADER PAGINA --}}
            <header class="mb-10 text-center space-y-4">
                <p class="text-[11px] tracking-[0.32em] uppercase text-slate-500">
                    Wave Shuttle Studio
                </p>
                <h1 class="text-3xl md:text-4xl font-semibold uppercase tracking-[0.28em]">
                    Team
                </h1>
                <p class="text-sm md:text-base text-slate-300 max-w-2xl mx-auto">
                    Le persone dietro Wave Shuttle: tecnici, orecchie e mani che tengono insieme
                    sessioni, mix e progetti senza farli esplodere.
                </p>
            </header>

            {{-- GRID TEAM (placeholder, ci metterai i nomi veri dopo) --}}
            <div class="ws-team-grid">
                {{-- Member 1 --}}
                <article
                    class="ws-team-card bg-slate-900/70 rounded-3xl border border-slate-800/80 p-6 flex flex-col items-center text-center gap-4"
                    data-team-card="patrick"
                >
                    <div class="w-28 h-28 rounded-full overflow-hidden border border-slate-700 bg-slate-800">
                        <img
                            src="{{ asset('storage/images/team-placeholder-1.png') }}"
                            alt="Patrick Wave"
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="space-y-1">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em]">
                            Patrick Wave
                        </h2>
                        <p class="text-[11px] uppercase tracking-[0.18em] text-cyan-300">
                            Mix &amp; Master Engineer
                        </p>
                    </div>

                    <p class="text-xs text-slate-400">
                        Controllo dei livelli, traduzione sugli impianti e decisioni brutali quando servono.
                    </p>

                    {{-- DETTAGLIO ESPANDIBILE --}}
                    <div class="ws-team-card-detail">
                        <div class="mt-4 w-full aspect-video rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                            <img
                                src="{{ asset('storage/images/team-patrick-detail.png') }}"
                                alt="Patrick Wave – in studio"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <p class="mt-3 text-xs text-slate-300">
                            Sessioni di mix e mastering full-remote, chain ibrida e workflow pensato per aprire
                            e riaprire i progetti senza perdere pezzi per strada.
                        </p>
                    </div>
                </article>

                {{-- Member 2 --}}
                <article
                    class="ws-team-card bg-slate-900/70 rounded-3xl border border-slate-800/80 p-6 flex flex-col items-center text-center gap-4"
                    data-team-card="support"
                >
                    <div class="w-28 h-28 rounded-full overflow-hidden border border-slate-700 bg-slate-800">
                        <img
                            src="{{ asset('storage/images/team-placeholder-2.png') }}"
                            alt="Session Support"
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="space-y-1">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em]">
                            Session Support
                        </h2>
                        <p class="text-[11px] uppercase tracking-[0.18em] text-cyan-300">
                            Editing &amp; Prep
                        </p>
                    </div>

                    <p class="text-xs text-slate-400">
                        Pulizia tracce, allineamenti, editing chirurgico prima che il mix inizi davvero.
                    </p>

                    <div class="ws-team-card-detail">
                        <div class="mt-4 w-full aspect-video rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                            <img
                                src="{{ asset('storage/images/team-support-detail.png') }}"
                                alt="Session Support – editing"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <p class="mt-3 text-xs text-slate-300">
                            Comping, tuning leggero, allineamento batterie e vocali per consegnare a Patrick
                            sessioni già pronte per il trattamento serio.
                        </p>
                    </div>
                </article>

                {{-- Member 3 --}}
                <article
                    class="ws-team-card bg-slate-900/70 rounded-3xl border border-slate-800/80 p-6 flex flex-col items-center text-center gap-4"
                    data-team-card="liaison"
                >
                    <div class="w-28 h-28 rounded-full overflow-hidden border border-slate-700 bg-slate-800">
                        <img
                            src="{{ asset('storage/images/team-placeholder-3.png') }}"
                            alt="Client Liaison"
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="space-y-1">
                        <h2 class="text-sm font-semibold uppercase tracking-[0.2em]">
                            Client Liaison
                        </h2>
                        <p class="text-[11px] uppercase tracking-[0.18em] text-cyan-300">
                            Workflow &amp; Feedback
                        </p>
                    </div>

                    <p class="text-xs text-slate-400">
                        Gestione revisioni, consegne e comunicazione, così tu pensi solo alla musica.
                    </p>

                    <div class="ws-team-card-detail">
                        <div class="mt-4 w-full aspect-video rounded-2xl overflow-hidden border border-slate-700 bg-slate-800">
                            <img
                                src="{{ asset('storage/images/team-liaison-detail.png') }}"
                                alt="Client Liaison – workflow"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <p class="mt-3 text-xs text-slate-300">
                            Coordina revisioni, note, round di feedback e consegne finali senza che le mail
                            esplodano o i file si perdano in dieci link diversi.
                        </p>
                    </div>
                </article>
            </div>

        </div>
    </section>
</x-site-layout>
