<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sameer Tours & Travels | Overseas Recruitment Consultancy, Trivandrum' }}</title>
    <meta name="description" content="{{ $description ?? 'Sameer Tours & Travels is a Kerala-based overseas recruitment and travel consultancy connecting skilled professionals in Israel, Armenia and beyond with verified international employers. RA Licence No. 4008/RAJ/PER/1000+/3/6216/2003.' }}">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / social --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sameer Tours & Travels">
    <meta property="og:title" content="{{ $title ?? 'Sameer Tours & Travels | Overseas Recruitment Consultancy' }}">
    <meta property="og:description" content="{{ $description ?? 'Connecting skilled professionals with verified overseas career opportunities. Registered recruitment agency based in Trivandrum, Kerala.' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-cover.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">

    {{-- Structured data: organisation + local business --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EmploymentAgency",
        "name": "Sameer Tours & Travels",
        "url": "https://sameertoursandtravel.com",
        "telephone": ["+917907654764", "+917356364780"],
        "email": "info@sameertoursandtravel.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Statue",
            "addressLocality": "Thiruvananthapuram",
            "addressRegion": "Kerala",
            "addressCountry": "IN"
        },
        "identifier": "RA Licence No. 4008/RAJ/PER/1000+/3/6216/2003"
    }
    </script>

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
    {{ $head ?? '' }}
</head>
<body class="bg-white text-[--color-ink-900] antialiased">

    {{-- Skip link for accessibility --}}
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:z-[100] focus:bg-navy-900 focus:text-white focus:px-4 focus:py-2 focus:rounded">Skip to content</a>

    {{-- ============ NAV ============ --}}
    <header data-site-nav class="fixed top-0 inset-x-0 z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-[--color-grey-200]">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="flex items-center justify-between h-[72px]">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 shrink-0" aria-label="Sameer Tours & Travels home">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="17" cy="17" r="16" stroke="#C9A227" stroke-width="1.5"/>
                        <path d="M8 19.5C11 14 14.5 11 20 9.5C21.5 15 19.5 20 14.5 23C11.5 24.8 9 23 8 19.5Z" fill="#0B1E3D"/>
                        <circle cx="20" cy="9.5" r="1.4" fill="#C9A227"/>
                    </svg>
                    <span class="font-display font-bold text-[15px] leading-tight text-[--color-navy-900]">
                        SAMEER TOURS<br class="hidden sm:block">
                        <span class="text-[11px] font-medium tracking-[0.18em] text-[--color-ink-400]">&amp; TRAVELS</span>
                    </span>
                </a>

                <nav class="hidden lg:flex items-center gap-9" aria-label="Primary">
                    <a href="{{ route('home') }}" class="text-[14px] font-medium text-[--color-ink-600] hover:text-[--color-navy-900] transition {{ request()->routeIs('home') ? 'text-[--color-navy-900]' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="text-[14px] font-medium text-[--color-ink-600] hover:text-[--color-navy-900] transition {{ request()->routeIs('about') ? 'text-[--color-navy-900]' : '' }}">About Us</a>
                    <a href="{{ route('services') }}" class="text-[14px] font-medium text-[--color-ink-600] hover:text-[--color-navy-900] transition {{ request()->routeIs('services') ? 'text-[--color-navy-900]' : '' }}">Services</a>
                    <a href="{{ route('vacancies') }}" class="text-[14px] font-medium text-[--color-ink-600] hover:text-[--color-navy-900] transition {{ request()->routeIs('vacancies') ? 'text-[--color-navy-900]' : '' }}">Current Vacancies</a>
                    <a href="{{ route('success-stories') }}" class="text-[14px] font-medium text-[--color-ink-600] hover:text-[--color-navy-900] transition {{ request()->routeIs('success-stories') ? 'text-[--color-navy-900]' : '' }}">Success Stories</a>
                    <a href="{{ route('contact') }}" class="text-[14px] font-medium text-[--color-ink-600] hover:text-[--color-navy-900] transition {{ request()->routeIs('contact') ? 'text-[--color-navy-900]' : '' }}">Contact Us</a>
                </nav>

                <div class="hidden lg:flex items-center gap-3">
                    <a href="tel:+917907654764" class="text-[13px] font-mono-tag text-[--color-ink-600]">+91 79076 54764</a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center rounded-full bg-[--color-navy-900] text-white text-[13.5px] font-semibold px-5 py-2.5 hover:bg-[--color-navy-800] transition">
                        Enquire Now
                    </a>
                </div>

                {{-- Mobile menu toggle --}}
                <button x-data x-on:click="$dispatch('toggle-mobile-nav')" class="lg:hidden p-2 -mr-2 text-[--color-navy-900]" aria-label="Open menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 6h18M3 12h18M3 18h18" stroke-linecap="round"/></svg>
                </button>
            </div>
        </div>

        {{-- Mobile nav panel --}}
        <div x-data="{ open: false }" x-on:toggle-mobile-nav.window="open = !open" x-show="open" x-collapse x-cloak class="lg:hidden border-t border-[--color-grey-200] bg-white">
            <nav class="px-5 py-4 flex flex-col gap-1" aria-label="Mobile">
                <a href="{{ route('home') }}" class="py-2.5 text-[15px] font-medium text-[--color-ink-900]">Home</a>
                <a href="{{ route('about') }}" class="py-2.5 text-[15px] font-medium text-[--color-ink-900]">About Us</a>
                <a href="{{ route('services') }}" class="py-2.5 text-[15px] font-medium text-[--color-ink-900]">Services</a>
                <a href="{{ route('vacancies') }}" class="py-2.5 text-[15px] font-medium text-[--color-ink-900]">Current Vacancies</a>
                <a href="{{ route('success-stories') }}" class="py-2.5 text-[15px] font-medium text-[--color-ink-900]">Success Stories</a>
                <a href="{{ route('contact') }}" class="py-2.5 text-[15px] font-medium text-[--color-ink-900]">Contact Us</a>
                <a href="{{ route('contact') }}" class="mt-2 inline-flex justify-center rounded-full bg-[--color-navy-900] text-white text-[14px] font-semibold px-5 py-3">Enquire Now</a>
            </nav>
        </div>
    </header>

    <main id="main" class="pt-[72px]">
        {{ $slot }}
    </main>

    {{-- ============ FOOTER ============ --}}
    <footer class="bg-[--color-navy-950] text-white">
        <div class="mx-auto max-w-7xl px-5 lg:px-8 py-16 grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="md:col-span-1">
                <div class="flex items-center gap-2.5 mb-4">
                    <svg width="30" height="30" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="17" cy="17" r="16" stroke="#C9A227" stroke-width="1.5"/>
                        <path d="M8 19.5C11 14 14.5 11 20 9.5C21.5 15 19.5 20 14.5 23C11.5 24.8 9 23 8 19.5Z" fill="#F4F5F7"/>
                        <circle cx="20" cy="9.5" r="1.4" fill="#C9A227"/>
                    </svg>
                    <span class="font-display font-bold text-[14px]">SAMEER TOURS &amp; TRAVELS</span>
                </div>
                <p class="text-[13.5px] leading-relaxed text-white/60 mb-4">Registered overseas recruitment and travel consultancy based in Trivandrum, Kerala &mdash; guiding candidates from registration to departure.</p>
                <p class="font-mono-tag text-[11.5px] text-[--color-gold-400]">RA LICENCE NO. 4008/RAJ/PER/1000+/3/6216/2003</p>
            </div>

            <div>
                <h3 class="eyebrow text-white/50 mb-4">Quick Links</h3>
                <ul class="space-y-2.5 text-[14px] text-white/75">
                    <li><a href="{{ route('services') }}" class="hover:text-[--color-gold-400] transition">Services</a></li>
                    <li><a href="{{ route('vacancies') }}" class="hover:text-[--color-gold-400] transition">Current Vacancies</a></li>
                    <li><a href="{{ route('success-stories') }}" class="hover:text-[--color-gold-400] transition">Success Stories</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-[--color-gold-400] transition">Contact</a></li>
                    <li><a href="{{ route('privacy') }}" class="hover:text-[--color-gold-400] transition">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="hover:text-[--color-gold-400] transition">Terms &amp; Conditions</a></li>
                </ul>
            </div>

            <div>
                <h3 class="eyebrow text-white/50 mb-4">Contact</h3>
                <ul class="space-y-2.5 text-[14px] text-white/75">
                    <li>Statue, Trivandrum, Kerala, India</li>
                    <li><a href="tel:+917907654764" class="hover:text-[--color-gold-400] transition">+91 79076 54764</a></li>
                    <li><a href="tel:+917356364780" class="hover:text-[--color-gold-400] transition">+91 73563 64780</a></li>
                    <li><a href="mailto:info@sameertoursandtravel.com" class="hover:text-[--color-gold-400] transition">info@sameertoursandtravel.com</a></li>
                    <li><a href="mailto:career@sameertoursandtravel.com" class="hover:text-[--color-gold-400] transition">career@sameertoursandtravel.com</a></li>
                </ul>
            </div>

            <div>
                <h3 class="eyebrow text-white/50 mb-4">Stay Updated</h3>
                <p class="text-[13.5px] text-white/70 mb-4">Join our WhatsApp Channel for the latest overseas job openings.</p>
                <a href="https://whatsapp.com/channel/0029VbBhfPx47XeJhhDYV026" target="_blank" rel="noopener" class="inline-flex items-center gap-2 rounded-full border border-[--color-gold-500] text-[--color-gold-400] text-[13.5px] font-semibold px-4 py-2.5 hover:bg-[--color-gold-500] hover:text-[--color-navy-950] transition">
                    Join WhatsApp Channel
                </a>
            </div>
        </div>

        <div class="border-t border-white/10">
            <div class="mx-auto max-w-7xl px-5 lg:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-3">
                <p class="text-[12.5px] text-white/50">&copy; {{ date('Y') }} Sameer Tours &amp; Travels. All rights reserved.</p>
                <p class="text-[12.5px] text-white/50">Registered Recruitment Consultancy &mdash; Trivandrum, Kerala, India</p>
            </div>
        </div>
    </footer>

    {{-- ============ FLOATING WHATSAPP BUTTON ============ --}}
    <a href="https://whatsapp.com/channel/0029VbBhfPx47XeJhhDYV026" target="_blank" rel="noopener"
       class="group fixed bottom-6 right-5 z-50 flex items-center gap-0 hover:gap-2.5 bg-[#25D366] text-white rounded-full shadow-lg shadow-black/20 px-3.5 py-3.5 hover:px-5 transition-all duration-300"
       aria-label="Join our WhatsApp Channel for latest overseas job updates">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="shrink-0"><path d="M17.6 6.32A8.86 8.86 0 0 0 12.05 4c-4.9 0-8.9 4-8.9 8.9 0 1.57.4 3.1 1.18 4.45L3 21l3.77-1.29a8.9 8.9 0 0 0 5.28 1.7h.01c4.9 0 8.9-4 8.9-8.9 0-2.38-.93-4.6-2.36-6.19Zm-5.55 13.7h-.01a7.4 7.4 0 0 1-3.77-1.03l-.27-.16-2.8.96.94-2.72-.18-.28a7.38 7.38 0 0 1-1.13-3.94c0-4.08 3.33-7.4 7.42-7.4 1.98 0 3.84.77 5.24 2.17a7.35 7.35 0 0 1 2.17 5.24c0 4.08-3.33 7.4-7.41 7.4Zm4.06-5.54c-.22-.11-1.31-.65-1.52-.72-.2-.08-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.17-.48.06-.22-.11-.94-.35-1.79-1.11-.66-.6-1.11-1.33-1.24-1.55-.13-.22-.01-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.22-.69-1.67-.18-.44-.37-.38-.5-.38h-.43c-.15 0-.39.06-.59.28-.2.22-.77.76-.77 1.85s.79 2.15.9 2.3c.11.15 1.55 2.4 3.8 3.32.53.23.94.36 1.27.47.53.17 1.01.14 1.4.09.43-.07 1.31-.54 1.49-1.06.19-.52.19-.97.13-1.06-.06-.1-.2-.15-.42-.26Z"/></svg>
        <span class="hidden group-hover:inline whitespace-nowrap text-[13px] font-semibold overflow-hidden max-w-0 group-hover:max-w-xs transition-all duration-300">Join WhatsApp Channel</span>
    </a>

    {{-- Mobile floating call button --}}
    <a href="tel:+917907654764" class="lg:hidden fixed bottom-6 left-5 z-50 flex items-center justify-center w-12 h-12 rounded-full bg-[--color-navy-900] text-white shadow-lg" aria-label="Call Sameer Tours & Travels">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92Z" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </a>

    @fluxScripts
    {{ $scripts ?? '' }}
</body>
</html>
