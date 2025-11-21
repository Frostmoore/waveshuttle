<section id="studio" class="bg-slate-950 border-t border-slate-800/70 border-t-0">
    <div class="max-w-6xl mx-auto px-4 py-14 md:py-18 space-y-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <p class="text-[11px] tracking-[0.32em] uppercase text-slate-500">
                    Studio
                </p>
                <h2 class="text-2xl md:text-3xl font-semibold">
                    Wave Shuttle Studio – sistemi pensati per il remoto
                </h2>
            </div>
        </div>

        <div class="grid md:grid-cols-[1fr,1.4fr] gap-10 items-start">
            {{-- IMMAGINE SETUP --}}
            <div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-slate-800 bg-slate-900/70">
                    <img
                        src="{{ asset('/storage/images/waveshuttle-rack.png') }}"
                        alt="Wave Shuttle Studio Rack"
                        class="w-full h-full object-cover"
                    >
                </div>
            </div>

            {{-- PUNTI CHIAVE --}}
            <div class="space-y-6 text-sm md:text-[15px] text-slate-200">
                <p>
                    Routing ibrido con outboard selezionato, monitoring controllato, template
                    pronti per sessioni di mix e mastering full-remote. L’obiettivo non è
                    “fare il figo con l’analogico”, ma avere un sistema che suona uguale ogni
                    volta che riapriamo il progetto.
                </p>

                <ul class="space-y-2 text-[13px] text-slate-300">
                    <li>• Setup ibrido: catena analogica mirata + workflow in-the-box.</li>
                    <li>• Sessioni remote con export di reference e note chiare.</li>
                    <li>• Preset di delivery pensati per Spotify, YouTube, Bandcamp & co.</li>
                    <li>• Template dedicati per mix completi o solo stem mastering.</li>
                </ul>

                <div id="booking" class="pt-4">
                    <h3 class="text-sm font-semibold uppercase tracking-[0.22em] text-slate-300 mb-3">
                        Booking & workflow
                    </h3>

                    <p class="text-[13px] text-slate-300 mb-4">
                        Presto qui ci sarà un form diretto per inviare i tuoi mix. Per ora:
                        ti basta preparare le tracce come da linee guida e contattare Patrick
                        con un link ai file.
                    </p>

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
</section>
