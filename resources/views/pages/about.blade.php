<x-layouts.app>
    <x-slot:title>About Us | Sameer Tours & Travels</x-slot:title>
    <x-slot:description>Learn about Sameer Tours & Travels &mdash; a Kerala-based, licensed overseas recruitment consultancy built on transparency, ethics and candidate-first support.</x-slot:description>

    <section class="bg-[--color-navy-950] py-20 lg:py-24">
        <div class="mx-auto max-w-4xl px-5 lg:px-8 text-center">
            <span class="eyebrow text-[--color-gold-400]">About Sameer Tours &amp; Travels</span>
            <h1 class="font-display font-extrabold text-white text-[34px] sm:text-[44px] leading-tight mt-4">
                Overseas recruitment,<br>handled the right way
            </h1>
        </div>
    </section>

    <section class="py-20 lg:py-24 bg-white">
        <div class="mx-auto max-w-4xl px-5 lg:px-8 space-y-6 text-[--color-ink-600] text-[15.5px] leading-relaxed">
            <p>Sameer Tours &amp; Travels is a Kerala-based overseas recruitment and travel consultancy dedicated to connecting skilled professionals with international career opportunities. Operating out of Statue, Trivandrum, we provide end-to-end recruitment solutions &mdash; from candidate registration through to departure &mdash; for roles across Israel and Armenia.</p>
            <p>With years of experience in overseas recruitment, visa guidance, documentation support and candidate assistance, our objective is simple: make overseas recruitment transparent, reliable and professionally managed, while supporting candidates at every stage of their journey.</p>
            <p>We operate under a valid Recruitment Agency Licence, and every placement we facilitate is conducted within the framework of Indian recruitment law and the requirements of our partner countries.</p>
        </div>
    </section>

    <section class="py-20 lg:py-24 bg-[--color-grey-100]">
        <div class="mx-auto max-w-7xl px-5 lg:px-8 grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 border border-[--color-grey-200]">
                <span class="eyebrow">Mission</span>
                <p class="text-[--color-navy-900] font-display font-semibold text-[17px] mt-3 leading-snug">To connect skilled Indian professionals with verified overseas employers through an honest, well-documented recruitment process.</p>
            </div>
            <div class="bg-white rounded-2xl p-8 border border-[--color-grey-200]">
                <span class="eyebrow">Vision</span>
                <p class="text-[--color-navy-900] font-display font-semibold text-[17px] mt-3 leading-snug">To be Kerala's most trusted name in overseas recruitment &mdash; known for transparency as much as for placements.</p>
            </div>
            <div class="bg-white rounded-2xl p-8 border border-[--color-grey-200]">
                <span class="eyebrow">Values</span>
                <p class="text-[--color-navy-900] font-display font-semibold text-[17px] mt-3 leading-snug">Ethics, accuracy and candidate wellbeing come before every placement number.</p>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-28 bg-white">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="max-w-xl mb-14">
                <span class="eyebrow">Why Candidates Choose Us</span>
                <h2 class="font-display font-bold text-[--color-navy-900] text-[30px] sm:text-[36px] mt-3">Built around the candidate, not just the placement</h2>
            </div>
            <div class="grid sm:grid-cols-2 gap-x-8 gap-y-10">
                @foreach ([
                    ['t' => 'Professional Team', 'd' => 'A dedicated team that handles registration, coordination and follow-up personally.'],
                    ['t' => 'Transparent Recruitment', 'd' => 'No hidden charges. Every fee and process step is explained upfront.'],
                    ['t' => 'Ethical Process', 'd' => 'We work only with verified employers and follow due legal process throughout.'],
                    ['t' => 'Complete Documentation Support', 'd' => 'From PCC to apostille, we manage the paperwork so you do not have to chase it alone.'],
                ] as $item)
                    <div class="flex gap-4">
                        <div class="w-9 h-9 rounded-full bg-[--color-navy-900] flex items-center justify-center shrink-0 mt-0.5">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C9A227" stroke-width="2"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-[--color-navy-900] text-[16.5px] mb-1">{{ $item['t'] }}</h3>
                            <p class="text-[--color-ink-600] text-[14.5px] leading-relaxed">{{ $item['d'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 bg-[--color-navy-900]">
        <div class="mx-auto max-w-5xl px-5 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-6 text-center sm:text-left">
            <div>
                <h2 class="font-display font-bold text-white text-[22px] sm:text-[26px]">Ready to begin your registration?</h2>
                <p class="text-white/60 text-[14.5px] mt-1">Speak to our team today &mdash; no obligation, no hidden fees.</p>
            </div>
            <a href="{{ route('contact') }}" class="shrink-0 inline-flex items-center gap-2 rounded-full bg-[--color-gold-500] text-[--color-navy-950] font-semibold text-[14.5px] px-6 py-3.5 hover:bg-[--color-gold-400] transition">Contact Us</a>
        </div>
    </section>
</x-layouts.app>
