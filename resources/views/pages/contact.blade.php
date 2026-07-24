<x-layouts.app>
    <x-slot:title>Contact Us | Sameer Tours & Travels</x-slot:title>
    <x-slot:description>Contact Sameer Tours & Travels in Statue, Trivandrum, Kerala. Call, WhatsApp or send an enquiry to begin your overseas registration.</x-slot:description>

    <section class="bg-[--color-navy-950] py-20 lg:py-24">
        <div class="mx-auto max-w-4xl px-5 lg:px-8 text-center">
            <span class="eyebrow text-[--color-gold-400]">Get In Touch</span>
            <h1 class="font-display font-extrabold text-white text-[34px] sm:text-[44px] leading-tight mt-4">Let's talk about your journey</h1>
        </div>
    </section>

    <section class="py-20 lg:py-24 bg-white">
        <div class="mx-auto max-w-7xl px-5 lg:px-8 grid lg:grid-cols-5 gap-12">

            <div class="lg:col-span-2 space-y-8">
                <div>
                    <span class="eyebrow">Office</span>
                    <h2 class="font-display font-bold text-[--color-navy-900] text-[20px] mt-2 mb-1">Sameer Tours &amp; Travels</h2>
                    <p class="text-[--color-ink-600] text-[14.5px]">Statue, Trivandrum, Kerala, India</p>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-[--color-grey-100] flex items-center justify-center shrink-0"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0B1E3D" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div>
                            <a href="tel:+917907654764" class="block text-[14.5px] font-medium text-[--color-ink-900]">+91 79076 54764</a>
                            <a href="tel:+917356364780" class="block text-[14.5px] font-medium text-[--color-ink-900]">+91 73563 64780</a>
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-[--color-grey-100] flex items-center justify-center shrink-0"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0B1E3D" stroke-width="1.8"><path d="M4 4h16v16H4V4z" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 6l8 7 8-7" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div>
                            <a href="mailto:info@sameertoursandtravel.com" class="block text-[14.5px] font-medium text-[--color-ink-900]">info@sameertoursandtravel.com</a>
                            <a href="mailto:career@sameertoursandtravel.com" class="block text-[14.5px] font-medium text-[--color-ink-900]">career@sameertoursandtravel.com</a>
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-[--color-grey-100] flex items-center justify-center shrink-0"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#0B1E3D" stroke-width="1.8"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                        <div>
                            <p class="text-[14.5px] font-medium text-[--color-ink-900]">Mon &ndash; Sat, 9:30 AM &ndash; 6:30 PM</p>
                            <p class="text-[13px] text-[--color-ink-400]">Sunday: Closed</p>
                        </div>
                    </li>
                </ul>

                <a href="https://whatsapp.com/channel/0029VbBhfPx47XeJhhDYV026" target="_blank" rel="noopener" class="inline-flex items-center gap-2 rounded-full bg-[#25D366] text-white text-[13.5px] font-semibold px-5 py-3 hover:opacity-90 transition">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.6 6.32A8.86 8.86 0 0012.05 4c-4.9 0-8.9 4-8.9 8.9 0 1.57.4 3.1 1.18 4.45L3 21l3.77-1.29a8.9 8.9 0 005.28 1.7h.01c4.9 0 8.9-4 8.9-8.9 0-2.38-.93-4.6-2.36-6.19Z"/></svg>
                    Chat on WhatsApp
                </a>

                <div class="rounded-xl overflow-hidden border border-[--color-grey-200] aspect-video">
                    <iframe
                        title="Sameer Tours & Travels office location — Statue, Trivandrum"
                        src="https://www.google.com/maps?q=Statue,+Thiruvananthapuram,+Kerala&output=embed"
                        class="w-full h-full" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <p class="font-mono-tag text-[11.5px] text-[--color-ink-400]">RA LICENCE NO. 4008/RAJ/PER/1000+/3/6216/2003</p>
            </div>

            <div class="lg:col-span-3">
                <livewire:enquiry-form :vacancy-id="request()->integer('vacancy') ?: null" />
            </div>
        </div>
    </section>
</x-layouts.app>
