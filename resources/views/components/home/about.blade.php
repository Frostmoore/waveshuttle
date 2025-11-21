<section id="patrick" class="bg-slate-950 border-t border-slate-800/70 border-t-0">
    <div class="max-w-6xl mx-auto px-4 py-14 md:py-18">
        <div class="mb-8">
            <p class="text-[11px] tracking-[0.32em] uppercase text-slate-500">
                About
            </p>
            <h2 class="text-2xl md:text-3xl font-semibold">
                Patrick Wave – dal noise al controllo totale
            </h2>
        </div>

        <div class="grid md:grid-cols-[1fr,1.4fr] gap-10 items-start">
            {{-- FOTO --}}
            <div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-slate-800 bg-slate-900/70">
                    <img
                        src="{{ asset('storage/images/patrick-wave.png') }}"
                        alt="Patrick Wave"
                        class="w-full h-full object-cover"
                    >
                </div>
            </div>

            {{-- TESTO + TIMELINE A STEP --}}
            <div class="space-y-8 text-sm md:text-[15px] text-slate-200">
                <p>
                    Patrick lavora sulle tracce come su navette spaziali: niente fronzoli,
                    niente plugin messi “perché sì”. Ogni scelta è pesata per far suonare il
                    brano ovunque: monitor da studio, casse del salotto, auricolari marci
                    e impianti live.
                </p>

                {{-- TIMELINE A STEP --}}
                <div class="pt-2 space-y-6">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-slate-500">
                        Alcune tappe
                    </p>

                    <div class="relative">
                        {{-- LINEA ORIZZONTALE DI SFONDO (SOLO DESKTOP) --}}
                        <div class="hidden md:block absolute top-4 left-0 right-0 h-px bg-slate-800/70"></div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 relative z-10">
                            {{-- STEP 1 --}}
                            <div class="flex flex-col items-center text-center gap-3">
                                <div class="flex items-center justify-center">
                                    <div class="h-8 w-8 rounded-full border border-cyan-400/70 bg-slate-950 flex items-center justify-center shadow-[0_0_18px_rgba(34,211,238,0.55)]">
                                        <span class="h-3 w-3 rounded-full bg-cyan-400"></span>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[11px] uppercase tracking-[0.22em] text-slate-400">
                                        2015
                                    </p>
                                    <p class="text-xs text-slate-300">
                                        Home studio borderline illegale, prime produzioni per band locali.
                                    </p>
                                </div>
                            </div>

                            {{-- STEP 2 --}}
                            <div class="flex flex-col items-center text-center gap-3">
                                <div class="flex items-center justify-center">
                                    <div class="h-8 w-8 rounded-full border border-cyan-400/50 bg-slate-950 flex items-center justify-center">
                                        <span class="h-2.5 w-2.5 rounded-full bg-cyan-300"></span>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[11px] uppercase tracking-[0.22em] text-slate-400">
                                        2018
                                    </p>
                                    <p class="text-xs text-slate-300">
                                        Primi lavori retribuiti, mix per progetti indipendenti e live recording.
                                    </p>
                                </div>
                            </div>

                            {{-- STEP 3 --}}
                            <div class="flex flex-col items-center text-center gap-3">
                                <div class="flex items-center justify-center">
                                    <div class="h-8 w-8 rounded-full border border-cyan-400/50 bg-slate-950 flex items-center justify-center">
                                        <span class="h-2.5 w-2.5 rounded-full bg-cyan-300"></span>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[11px] uppercase tracking-[0.22em] text-slate-400">
                                        2021
                                    </p>
                                    <p class="text-xs text-slate-300">
                                        Setup ibrido: catena analogica mirata + workflow in-the-box ottimizzato.
                                    </p>
                                </div>
                            </div>

                            {{-- STEP 4 --}}
                            <div class="flex flex-col items-center text-center gap-3">
                                <div class="flex items-center justify-center">
                                    <div class="h-8 w-8 rounded-full border border-cyan-400 bg-slate-950 flex items-center justify-center shadow-[0_0_22px_rgba(34,211,238,0.7)]">
                                        <span class="h-3 w-3 rounded-full bg-cyan-300"></span>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[11px] uppercase tracking-[0.22em] text-cyan-300">
                                        Oggi
                                    </p>
                                    <p class="text-xs text-slate-300">
                                        Wave Shuttle: sistema di mix remoto con recall precisi e delivery pensata
                                        per lo streaming.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- MINI RIGA DI CHIUSURA --}}
                    <p class="text-[11px] text-slate-500">
                        Ogni progetto entra nel sistema Wave Shuttle con una cosa chiara in testa:
                        <span class="text-slate-200">far funzionare il pezzo nel mondo reale, non solo in studio.</span>
                    </p>

                    {{-- CTA: BOOK A SESSION --}}
                    <div class="pt-4">
                        <a href="mailto:info@waveshuttle.studio"
                        class="inline-flex items-center justify-center px-6 py-2.5 rounded-full
                        text-[11px] font-semibold uppercase tracking-[0.22em]
                        border border-cyan-400/70 text-cyan-300 bg-transparent
                        transition
                        hover:bg-cyan-400 hover:text-slate-950 hover:border-cyan-400
                        hover:shadow-[0_0_40px_rgba(34,211,238,0.55)]">
                            Book a Session
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
