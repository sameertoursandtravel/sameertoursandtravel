<x-layouts.app>
    <x-slot:title>Services | Sameer Tours & Travels</x-slot:title>
    <x-slot:description>End-to-end overseas recruitment and documentation services &mdash; job assistance, visa guidance, travel support, PCC, apostille, attestation and more.</x-slot:description>

    <section class="bg-[--color-navy-950] py-20 lg:py-24">
        <div class="mx-auto max-w-4xl px-5 lg:px-8 text-center">
            <span class="eyebrow text-[--color-gold-400]">What We Offer</span>
            <h1 class="font-display font-extrabold text-white text-[34px] sm:text-[44px] leading-tight mt-4">Two services. One destination.</h1>
            <p class="text-white/65 text-[15.5px] mt-4 max-w-xl mx-auto">Overseas recruitment and the documentation that supports it &mdash; managed together so nothing falls through the gaps.</p>
        </div>
    </section>

    {{-- ===== OVERSEAS RECRUITMENT ===== --}}
    <section class="py-20 lg:py-24 bg-white">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="flex items-center gap-4 mb-12">
                <div class="w-12 h-12 rounded-full bg-[--color-navy-900] flex items-center justify-center shrink-0">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#C9A227" stroke-width="1.7"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div>
                    <span class="eyebrow">01 &mdash; Core Service</span>
                    <h2 class="font-display font-bold text-[--color-navy-900] text-[26px] sm:text-[30px]">Overseas Recruitment</h2>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ([
                    'International Job Assistance', 'Candidate Registration', 'CV Preparation',
                    'Interview Guidance', 'Interview Training', 'Employer Coordination',
                    'Visa Guidance', 'Travel Assistance', 'Airport Departure Assistance',
                ] as $service)
                    <div class="flex items-center gap-3 rounded-xl border border-[--color-grey-200] px-5 py-4 hover:border-[--color-gold-500] transition">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C9A227" stroke-width="2" class="shrink-0"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span class="text-[14.5px] font-medium text-[--color-ink-900]">{{ $service }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== DOCUMENTATION SERVICES ===== --}}
    <section class="py-20 lg:py-24 bg-[--color-grey-100]">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="flex items-center gap-4 mb-12">
                <div class="w-12 h-12 rounded-full bg-[--color-navy-900] flex items-center justify-center shrink-0">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#C9A227" stroke-width="1.7"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div>
                    <span class="eyebrow">02 &mdash; Supporting Service</span>
                    <h2 class="font-display font-bold text-[--color-navy-900] text-[26px] sm:text-[30px]">Documentation Services</h2>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ([
                    'Passport Assistance', 'Police Clearance Certificate (PCC)', 'Apostille Services',
                    'Notary Attestation', 'Certificate Attestation', 'Educational Certificate Verification',
                    'Birth Certificate Assistance', 'Marriage Certificate Assistance', 'Affidavit Drafting',
                    'Legal Affidavit Services', 'SSLC Certificate Assistance', 'Aadhaar Assistance',
                    'PAN Card Assistance', 'Document Translation Support', 'Travel Insurance Guidance',
                    'General Documentation Assistance',
                ] as $service)
                    <div class="flex items-center gap-3 rounded-xl bg-white border border-[--color-grey-200] px-5 py-4 hover:border-[--color-gold-500] transition">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C9A227" stroke-width="2" class="shrink-0"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span class="text-[14.5px] font-medium text-[--color-ink-900]">{{ $service }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 bg-[--color-navy-900]">
        <div class="mx-auto max-w-5xl px-5 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-6 text-center sm:text-left">
            <div>
                <h2 class="font-display font-bold text-white text-[22px] sm:text-[26px]">Need help with a specific document?</h2>
                <p class="text-white/60 text-[14.5px] mt-1">Send us your requirement and we'll tell you exactly what's needed.</p>
            </div>
            <a href="{{ route('contact') }}" class="shrink-0 inline-flex items-center gap-2 rounded-full bg-[--color-gold-500] text-[--color-navy-950] font-semibold text-[14.5px] px-6 py-3.5 hover:bg-[--color-gold-400] transition">Send an Enquiry</a>
        </div>
    </section>
</x-layouts.app>
