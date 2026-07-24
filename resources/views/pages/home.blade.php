<x-layouts.app>
    <x-slot:title>Sameer Tours & Travels | Your Trusted Overseas Recruitment Partner</x-slot:title>
    <x-slot:description>Kerala-based overseas recruitment consultancy placing skilled professionals in Israel and Armenia. Registration, documentation, visa processing and departure support &mdash; all under one roof.</x-slot:description>

    {{-- ============ HERO ============ --}}
    <section class="relative overflow-hidden bg-[--color-navy-950]">
        <div class="absolute inset-0 opacity-[0.07]" style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 28px 28px;"></div>

        <div class="relative mx-auto max-w-7xl px-5 lg:px-8 pt-20 pb-24 lg:pt-28 lg:pb-32 grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="eyebrow text-[--color-gold-400]">RA Licence No. 4008/RAJ/PER/1000+/3/6216/2003</span>
                <h1 class="font-display font-extrabold text-white text-[38px] sm:text-[46px] lg:text-[54px] leading-[1.08] mt-4">
                    Your Trusted<br>Overseas Recruitment<br><span class="text-[--color-gold-400]">Partner</span>
                </h1>
                <p class="text-white/70 text-[16.5px] leading-relaxed mt-6 max-w-md">
                    Connecting skilled professionals from Kerala with verified international employers &mdash; from registration and documentation to visa processing, travel and arrival.
                </p>
                <div class="flex flex-wrap gap-3.5 mt-9">
                    <a href="{{ route('vacancies') }}" class="inline-flex items-center rounded-full bg-[--color-gold-500] text-[--color-navy-950] font-semibold text-[14.5px] px-6 py-3.5 hover:bg-[--color-gold-400] transition">Current Vacancies</a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center rounded-full border border-white/25 text-white font-semibold text-[14.5px] px-6 py-3.5 hover:bg-white/10 transition">Contact Us</a>
                    <a href="https://whatsapp.com/channel/0029VbBhfPx47XeJhhDYV026" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-white/80 font-medium text-[14.5px] px-2 py-3.5 hover:text-white transition">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.6 6.32A8.86 8.86 0 0 0 12.05 4c-4.9 0-8.9 4-8.9 8.9 0 1.57.4 3.1 1.18 4.45L3 21l3.77-1.29a8.9 8.9 0 0 0 5.28 1.7h.01c4.9 0 8.9-4 8.9-8.9 0-2.38-.93-4.6-2.36-6.19Z"/></svg>
                        Join WhatsApp Channel
                    </a>
                </div>
            </div>

            {{-- Signature: flight-route SVG, Kerala -> Tel Aviv / Yerevan, boarding-pass motif --}}
            <div class="relative" aria-hidden="true">
                <svg viewBox="0 0 480 420" class="w-full h-auto max-w-md mx-auto">
                    <circle cx="90" cy="330" r="4.5" fill="#C9A227"/>
                    <text x="90" y="352" text-anchor="middle" fill="#ffffff" fill-opacity="0.65" font-family="JetBrains Mono, monospace" font-size="11" letter-spacing="1">TRV</text>

                    <circle cx="330" cy="150" r="4.5" fill="#ffffff" fill-opacity="0.85"/>
                    <text x="330" y="130" text-anchor="middle" fill="#ffffff" fill-opacity="0.65" font-family="JetBrains Mono, monospace" font-size="11" letter-spacing="1">TLV</text>

                    <circle cx="400" cy="90" r="4.5" fill="#ffffff" fill-opacity="0.85"/>
                    <text x="400" y="70" text-anchor="middle" fill="#ffffff" fill-opacity="0.65" font-family="JetBrains Mono, monospace" font-size="11" letter-spacing="1">EVN</text>

                    <path d="M90 330 Q 210 260 330 150" fill="none" stroke="#C9A227" stroke-width="1.5" class="route-dash" stroke-opacity="0.8"/>
                    <path d="M90 330 Q 250 230 400 90" fill="none" stroke="#ffffff" stroke-width="1" class="route-dash" stroke-opacity="0.3"/>

                    {{-- boarding-pass style ticket card --}}
                    <g transform="translate(60,160)">
                        <rect x="0" y="0" width="220" height="120" rx="12" fill="#0F2447" stroke="#C9A227" stroke-opacity="0.5"/>
                        <text x="20" y="30" fill="#C9A227" font-family="JetBrains Mono, monospace" font-size="10" letter-spacing="1">BOARDING PASS</text>
                        <text x="20" y="58" fill="#ffffff" font-family="Montserrat, sans-serif" font-size="16" font-weight="700">TRV &rarr; TLV</text>
                        <line x1="20" y1="72" x2="200" y2="72" stroke="#ffffff" stroke-opacity="0.15"/>
                        <text x="20" y="94" fill="#ffffff" fill-opacity="0.6" font-family="JetBrains Mono, monospace" font-size="9">REF SMR-ISR-014</text>
                        <text x="20" y="110" fill="#ffffff" fill-opacity="0.6" font-family="JetBrains Mono, monospace" font-size="9">STATUS: CONFIRMED</text>
                        <circle cx="188" cy="100" r="14" fill="none" stroke="#2F6F4E" stroke-width="1.5"/>
                        <path d="M182 100l4 4 8-8" fill="none" stroke="#4FAE7C" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
            </div>
        </div>
    </section>

    {{-- ============ WHY CHOOSE SAMEER ============ --}}
    <section class="py-20 lg:py-28 bg-white">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="max-w-xl mb-14">
                <span class="eyebrow">Why Sameer</span>
                <h2 class="font-display font-bold text-[--color-navy-900] text-[30px] sm:text-[36px] mt-3">A recruitment process built on transparency</h2>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
                @foreach ([
                    ['title' => 'Professional Guidance', 'desc' => 'One-to-one support at every stage, from your first enquiry to your first day on the job.', 'icon' => 'M12 4v16m8-8H4'],
                    ['title' => 'Transparent Process', 'desc' => 'Clear documentation, verified employers and no hidden charges at any stage.', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'Experienced Team', 'desc' => 'Years of hands-on experience in overseas placement across Israel and Armenia.', 'icon' => 'M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-8a4 4 0 11-8 0 4 4 0 018 0zm6 3a4 4 0 11-8 0 4 4 0 018 0z'],
                    ['title' => 'Documentation Support', 'desc' => 'Attestation, PCC, apostille and certificate support handled end-to-end.', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                    ['title' => 'Interview Assistance', 'desc' => 'Mock interviews and coaching so candidates walk in prepared and confident.', 'icon' => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.86 9.86 0 01-4-.8L3 20l1.3-3.9A7.96 7.96 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z'],
                    ['title' => 'Trusted Recruitment', 'desc' => 'Registered and licensed &mdash; recruitment conducted fully within the law.', 'icon' => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z'],
                ] as $item)
                    <div>
                        <div class="w-11 h-11 rounded-full bg-[--color-navy-900] flex items-center justify-center mb-4">
                            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#C9A227" stroke-width="1.7"><path d="{{ $item['icon'] }}" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="font-display font-bold text-[--color-navy-900] text-[17px] mb-1.5">{{ $item['title'] }}</h3>
                        <p class="text-[--color-ink-600] text-[14.5px] leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            {{-- Animated counters --}}
            <div class="mt-20 grid grid-cols-2 sm:grid-cols-4 gap-8 border-t border-[--color-grey-200] pt-12">
                @foreach ([['n' => 500, 'l' => 'Candidates Registered'], ['n' => 2, 'l' => 'Partner Countries'], ['n' => 40, 'l' => 'Employer Partners'], ['n' => 8, 'l' => 'Years of Experience']] as $stat)
                    <div>
                        <div class="font-display font-extrabold text-[--color-navy-900] text-[32px] sm:text-[38px]">
                            <span data-counter="{{ $stat['n'] }}">0</span>+
                        </div>
                        <p class="text-[13px] text-[--color-ink-400] mt-1">{{ $stat['l'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ CURRENT OPENINGS (boarding-pass cards) ============ --}}
    <section class="py-20 lg:py-24 bg-[--color-grey-100]">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="flex flex-wrap items-end justify-between gap-4 mb-12">
                <div>
                    <span class="eyebrow">Current Openings</span>
                    <h2 class="font-display font-bold text-[--color-navy-900] text-[30px] sm:text-[36px] mt-3">Roles open for application</h2>
                </div>
                <a href="{{ route('vacancies') }}" class="text-[14px] font-semibold text-[--color-navy-900] underline underline-offset-4">View all vacancies &rarr;</a>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($vacancies as $vacancy)
                    <x-vacancy-card :vacancy="$vacancy" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ OUR PROCESS ============ --}}
    <section class="py-20 lg:py-28 bg-white">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="max-w-xl mb-14">
                <span class="eyebrow">Our Process</span>
                <h2 class="font-display font-bold text-[--color-navy-900] text-[30px] sm:text-[36px] mt-3">Six checkpoints, one journey</h2>
                <p class="text-[--color-ink-600] text-[15px] mt-3">Every candidate follows the same verified route &mdash; like a boarding pass, each step is stamped before you move to the next.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ([
                    ['n' => '01', 't' => 'Registration', 'd' => 'Share your details and preferred country to begin your file.'],
                    ['n' => '02', 't' => 'Document Verification', 'd' => 'We verify your certificates, ID and eligibility documents.'],
                    ['n' => '03', 't' => 'Interview', 'd' => 'Guided preparation followed by the employer interview.'],
                    ['n' => '04', 't' => 'Visa Processing', 'd' => 'We coordinate your work visa paperwork end-to-end.'],
                    ['n' => '05', 't' => 'Travel Assistance', 'd' => 'Ticketing, insurance and pre-departure briefing.'],
                    ['n' => '06', 't' => 'Departure', 'd' => 'Airport assistance and support as you begin your new role.'],
                ] as $step)
                    <div class="boarding-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <span class="font-mono-tag text-[--color-gold-600] text-[13px]">STEP {{ $step['n'] }}</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C9A227" stroke-width="1.8"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="font-display font-bold text-[--color-navy-900] text-[17px] mb-1.5">{{ $step['t'] }}</h3>
                        <p class="text-[--color-ink-600] text-[14px] leading-relaxed">{{ $step['d'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ TESTIMONIALS ============ --}}
    <section class="py-20 lg:py-24 bg-[--color-navy-900]">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <span class="eyebrow text-[--color-gold-400]">Success Stories</span>
            <h2 class="font-display font-bold text-white text-[30px] sm:text-[36px] mt-3 mb-12">From registration to departure</h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ([
                    ['name' => 'Anoop K.', 'role' => 'Caregiver, Israel', 'quote' => 'The team guided me through every document. I knew exactly what stage my file was at, at all times.'],
                    ['name' => 'Reshma S.', 'role' => 'General Worker, Armenia', 'quote' => 'From my first call to landing in Yerevan, the process felt organised and honest.'],
                    ['name' => 'Vishnu P.', 'role' => 'Welder, Israel', 'quote' => 'Interview preparation made a real difference. I felt ready and confident on the day.'],
                ] as $t)
                    <div class="rounded-2xl bg-white/5 border border-white/10 p-7">
                        <svg width="26" height="20" viewBox="0 0 26 20" fill="none" class="mb-4"><path d="M0 20V11.7C0 5.2 4.1.6 10.5 0l.9 3.4C7.7 4.4 5.6 6.9 5.6 10h5V20H0zm14.6 0V11.7c0-6.5 4.1-11.1 10.5-11.7l.9 3.4c-3.7 1-5.8 3.5-5.8 6.6h5V20h-10.6z" fill="#C9A227"/></svg>
                        <p class="text-white/85 text-[14.5px] leading-relaxed mb-5">{{ $t['quote'] }}</p>
                        <p class="font-display font-bold text-white text-[14.5px]">{{ $t['name'] }}</p>
                        <p class="text-white/50 text-[12.5px]">{{ $t['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ WHATSAPP CTA ============ --}}
    <section class="py-16 bg-[--color-gold-500]">
        <div class="mx-auto max-w-5xl px-5 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-6 text-center sm:text-left">
            <div>
                <h2 class="font-display font-bold text-[--color-navy-950] text-[22px] sm:text-[26px]">Never miss a new opening</h2>
                <p class="text-[--color-navy-950]/75 text-[14.5px] mt-1">Join our WhatsApp Channel for the latest overseas job updates, straight to your phone.</p>
            </div>
            <a href="https://whatsapp.com/channel/0029VbBhfPx47XeJhhDYV026" target="_blank" rel="noopener" class="shrink-0 inline-flex items-center gap-2 rounded-full bg-[--color-navy-950] text-white font-semibold text-[14.5px] px-6 py-3.5 hover:bg-[--color-navy-800] transition">
                Join WhatsApp Channel
            </a>
        </div>
    </section>
</x-layouts.app>
