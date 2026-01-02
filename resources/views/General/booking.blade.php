<x-site-layout title="Wave Shuttle – Booking">
    <section id="booking" class="bg-slate-950">
        <div class="max-w-4xl mx-auto px-4 py-16 md:py-24">
            {{-- HEADER --}}
            <header class="text-center space-y-4 mb-10">
                <p class="text-[11px] tracking-[0.32em] uppercase text-slate-500">
                    Book a Session
                </p>
                <h1 class="text-2xl md:text-3xl font-semibold uppercase tracking-[0.26em]">
                    Lock in your time at Wave Shuttle
                </h1>
                <p class="text-sm md:text-base text-slate-300 max-w-2xl mx-auto">
                    Qui troverai il form completo per inviare i tuoi mix, stem o reference.
                    Per ora è un placeholder grafico, in attesa dell’embed dalla piattaforma esterna.
                </p>
            </header>

            {{-- CARD FORM PLACEHOLDER --}}
            <div class="bg-slate-900/80 border border-slate-800/90 rounded-3xl p-6 md:p-8 shadow-[0_0_40px_rgba(15,23,42,0.85)]">
                <div class="mb-6 text-[11px] md:text-xs text-slate-400">
                    Questo form è <span class="text-cyan-300">solo un mock</span>.  
                    Quando sarà pronto l’embeddable, verrà montato esattamente in questo blocco.
                </div>

                <form class="grid gap-4 md:gap-6">
                    <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                        <div class="flex flex-col gap-1">
                            <label class="text-[11px] uppercase tracking-[0.22em] text-slate-400">
                                Nome / Artista
                            </label>
                            <input
                                type="text"
                                class="w-full rounded-xl bg-slate-950/60 border border-slate-700/80 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400/60"
                                placeholder="Il tuo nome o nome progetto"
                                disabled
                            >
                        </div>

                        <div class="flex flex-col gap-1">
                            <label class="text-[11px] uppercase tracking-[0.22em] text-slate-400">
                                Email
                            </label>
                            <input
                                type="email"
                                class="w-full rounded-xl bg-slate-950/60 border border-slate-700/80 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400/60"
                                placeholder="name@domain.com"
                                disabled
                            >
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                        <div class="flex flex-col gap-1">
                            <label class="text-[11px] uppercase tracking-[0.22em] text-slate-400">
                                Tipo di progetto
                            </label>
                            <select
                                class="w-full rounded-xl bg-slate-950/60 border border-slate-700/80 px-3 py-2 text-sm text-slate-100 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400/60"
                                disabled
                            >
                                <option>Mix</option>
                                <option>Master</option>
                                <option>Full production</option>
                                <option>Altro</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-1">
                            <label class="text-[11px] uppercase tracking-[0.22em] text-slate-400">
                                Preferenza oraria
                            </label>
                            <input
                                type="text"
                                class="w-full rounded-xl bg-slate-950/60 border border-slate-700/80 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400/60"
                                placeholder="es. sere, weekend, ecc."
                                disabled
                            >
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-[11px] uppercase tracking-[0.22em] text-slate-400">
                            Messaggio
                        </label>
                        <textarea
                            rows="4"
                            class="w-full rounded-xl bg-slate-950/60 border border-slate-700/80 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400/60"
                            placeholder="Racconta cosa vuoi fare, riferimenti, deadline…"
                            disabled
                        ></textarea>
                    </div>

                    <div class="mt-4 flex flex-col md:flex-row items-start md:items-center justify-between gap-3">
                        <p class="text-[11px] text-slate-500 max-w-md">
                            Quando il form esterno sarà pronto, questo layout rimarrà come cornice
                            e il form verrà caricato qui dentro.
                        </p>

                        <button
                            type="button"
                            class="inline-flex items-center justify-center px-6 py-2 rounded-full border border-cyan-400/70 text-cyan-300 text-[11px] tracking-[0.22em] uppercase hover:bg-cyan-300 hover:text-slate-950 hover:shadow-[0_0_40px_rgba(34,211,238,0.55)] transition"
                            disabled
                        >
                            Book a session
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-site-layout>
