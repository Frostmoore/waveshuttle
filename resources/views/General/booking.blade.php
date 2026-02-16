<x-site-layout title="Wave Shuttle – Booking">
    <section id="booking" class="bg-slate-950">
        <div class="w-full px-4 py-16 md:py-24">
            {{-- HEADER --}}
            <header class="text-center space-y-4 mb-10">
                <p class="text-[11px] tracking-[0.32em] uppercase text-slate-500">
                    Book a Session
                </p>
                <h1 class="text-2xl md:text-3xl font-semibold uppercase tracking-[0.26em]">
                    Lock in your time at Wave Shuttle
                </h1>
                <p class="text-sm md:text-base text-slate-300 max-w-2xl mx-auto">
                    Compila il form qui sotto per prenotare e inviare i dettagli del tuo progetto.
                </p>
            </header>

            {{-- IFRAME FULL-WIDTH --}}
            <div class="w-full max-w-none">
                <div class="w-full h-[980px] md:h-[1050px] lg:h-[1120px]">
                    <iframe
                        id="sonido-iframe"
                        scrolling="no"
                        src="https://waveshuttle.mysonido.com/booking-services"
                        frameborder="0"
                        seamless="seamless"
                        style="width:100%; height:100%;"
                        title="Wave Shuttle Booking Form"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>
</x-site-layout>
