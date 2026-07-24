<x-layouts.app>
    <x-slot:title>Success Stories | Sameer Tours & Travels</x-slot:title>
    <x-slot:description>Visa approvals, candidate departures and real journeys &mdash; see how Sameer Tours & Travels has helped candidates reach Israel and Armenia.</x-slot:description>

    <section class="bg-[--color-navy-950] py-20 lg:py-24">
        <div class="mx-auto max-w-4xl px-5 lg:px-8 text-center">
            <span class="eyebrow text-[--color-gold-400]">Success Stories</span>
            <h1 class="font-display font-extrabold text-white text-[34px] sm:text-[44px] leading-tight mt-4">Real journeys, real departures</h1>
            <p class="text-white/65 text-[15.5px] mt-4 max-w-xl mx-auto">From visa approval to arrival &mdash; every stamp in this gallery represents a candidate who trusted us with their journey.</p>
        </div>
    </section>

    @php
        $groups = [
            'Israel' => ['flag' => '🇮🇱', 'items' => [
                ['label' => 'Visa Approval', 'name' => 'Caregiver placement', 'kind' => 'stamp'],
                ['label' => 'Candidate Departure', 'name' => 'Trivandrum &rarr; Tel Aviv', 'kind' => 'boarding'],
                ['label' => 'Airport Departure', 'name' => 'Send-off, Trivandrum Airport', 'kind' => 'photo'],
            ]],
            'Armenia' => ['flag' => '🇦🇲', 'items' => [
                ['label' => 'Visa Approval', 'name' => 'Warehouse role placement', 'kind' => 'stamp'],
                ['label' => 'Candidate Departure', 'name' => 'Trivandrum &rarr; Yerevan', 'kind' => 'boarding'],
                ['label' => 'Airport Departure', 'name' => 'Send-off, Trivandrum Airport', 'kind' => 'photo'],
            ]],
        ];
    @endphp

    <section class="py-20 lg:py-24 bg-white">
        <div class="mx-auto max-w-7xl px-5 lg:px-8 space-y-20">
            @foreach ($groups as $country => $group)
                <div>
                    <div class="flex items-center gap-3 mb-8">
                        <span class="text-2xl" aria-hidden="true">{{ $group['flag'] }}</span>
                        <h2 class="font-display font-bold text-[--color-navy-900] text-[24px] sm:text-[28px]">{{ $country }}</h2>
                    </div>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($group['items'] as $item)
                            <div class="rounded-2xl overflow-hidden border border-[--color-grey-200]">
                                <div class="aspect-[4/3] bg-gradient-to-br from-[--color-navy-900] to-[--color-navy-700] flex flex-col items-center justify-center gap-3 relative">
                                    @if ($item['kind'] === 'stamp')
                                        <div class="w-16 h-16 rounded-full stamp-ring text-[--color-gold-400] flex items-center justify-center">
                                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                    @elseif ($item['kind'] === 'boarding')
                                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#C9A227" stroke-width="1.5"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    @else
                                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#C9A227" stroke-width="1.5"><path d="M4 16l4.6-4.6a2 2 0 012.8 0L16 16m-2-2 1.6-1.6a2 2 0 012.8 0L20 14M4 8h.01M4 4h16a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    @endif
                                    <span class="font-mono-tag text-[10.5px] text-white/50 absolute bottom-3 right-3">PHOTO PENDING</span>
                                </div>
                                <div class="p-5">
                                    <span class="eyebrow">{{ $item['label'] }}</span>
                                    <p class="font-display font-semibold text-[--color-navy-900] text-[15px] mt-1">{!! $item['name'] !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="rounded-2xl bg-[--color-grey-100] p-8 sm:p-10 text-center">
                <h3 class="font-display font-bold text-[--color-navy-900] text-[20px] mb-2">Future Countries</h3>
                <p class="text-[--color-ink-600] text-[14.5px] max-w-lg mx-auto">As we open recruitment for new countries, candidate journeys and success stories will be added here.</p>
            </div>

            <div class="text-center text-[13px] text-[--color-ink-400] max-w-lg mx-auto">
                This gallery is ready for your real candidate photos, video testimonials and departure moments &mdash; replace the placeholder tiles above with your own images as they become available.
            </div>
        </div>
    </section>
</x-layouts.app>
