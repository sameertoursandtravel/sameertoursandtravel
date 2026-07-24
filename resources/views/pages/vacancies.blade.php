<x-layouts.app>
    <x-slot:title>Current Vacancies | Sameer Tours & Travels</x-slot:title>
    <x-slot:description>Live overseas job openings in Israel and Armenia &mdash; caregiver, general worker and skilled trade roles. Apply through Sameer Tours & Travels.</x-slot:description>

    <section class="bg-[--color-navy-950] py-20 lg:py-24">
        <div class="mx-auto max-w-4xl px-5 lg:px-8 text-center">
            <span class="eyebrow text-[--color-gold-400]">Current Vacancies</span>
            <h1 class="font-display font-extrabold text-white text-[34px] sm:text-[44px] leading-tight mt-4">Roles open for application</h1>
            <p class="text-white/65 text-[14px] mt-4 font-mono-tag">LAST UPDATED &mdash; {{ now()->format('d M Y') }}</p>
        </div>
    </section>

    <section class="py-20 lg:py-24 bg-white">
        <div class="mx-auto max-w-7xl px-5 lg:px-8 space-y-20">

            <div>
                <div class="flex items-center gap-3 mb-8">
                    <span class="text-2xl" aria-hidden="true">🇮🇱</span>
                    <h2 class="font-display font-bold text-[--color-navy-900] text-[24px] sm:text-[28px]">Israel</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($israelVacancies as $vacancy)
                        <x-vacancy-card :vacancy="$vacancy" />
                    @empty
                        <p class="text-[--color-ink-500] text-[14.5px]">No open roles in Israel right now &mdash; check back soon or join our WhatsApp Channel for alerts.</p>
                    @endforelse
                </div>
            </div>

            <div>
                <div class="flex items-center gap-3 mb-8">
                    <span class="text-2xl" aria-hidden="true">🇦🇲</span>
                    <h2 class="font-display font-bold text-[--color-navy-900] text-[24px] sm:text-[28px]">Armenia</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($armeniaVacancies as $vacancy)
                        <x-vacancy-card :vacancy="$vacancy" />
                    @empty
                        <p class="text-[--color-ink-500] text-[14.5px]">No open roles in Armenia right now &mdash; check back soon or join our WhatsApp Channel for alerts.</p>
                    @endforelse
                </div>
                <p class="text-[13px] text-[--color-ink-400] mt-4">TRC (Temporary Residence Card) assistance is available for Armenia placements.</p>
            </div>

            <div class="rounded-2xl bg-[--color-grey-100] p-8 sm:p-10 text-center">
                <h3 class="font-display font-bold text-[--color-navy-900] text-[20px] mb-2">Future Countries</h3>
                <p class="text-[--color-ink-600] text-[14.5px] max-w-lg mx-auto">We are actively expanding our employer network. Join our WhatsApp Channel to be the first to know when new countries open for recruitment.</p>
                <a href="https://whatsapp.com/channel/0029VbBhfPx47XeJhhDYV026" target="_blank" rel="noopener" class="inline-flex items-center gap-2 mt-5 rounded-full bg-[--color-navy-900] text-white text-[13.5px] font-semibold px-5 py-2.5 hover:bg-[--color-navy-800] transition">Join WhatsApp Channel</a>
            </div>
        </div>
    </section>
</x-layouts.app>
