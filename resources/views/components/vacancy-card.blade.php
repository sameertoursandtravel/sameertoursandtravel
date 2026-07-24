@props(['vacancy'])

<div class="boarding-card flex flex-col">
    <div class="p-6">
        <div class="flex items-center justify-between mb-4">
            <span class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-[--color-navy-900]">
                <span class="text-[17px]" aria-hidden="true">{{ $vacancy->flag_emoji }}</span>
                {{ $vacancy->country }}
            </span>
            <span class="font-mono-tag text-[11px] text-[--color-ink-400]">{{ $vacancy->reference_code }}</span>
        </div>

        <h3 class="font-display font-bold text-[--color-navy-900] text-[19px] mb-2">{{ $vacancy->title }}</h3>
        <p class="text-[--color-ink-600] text-[14px] leading-relaxed mb-4">{{ $vacancy->summary }}</p>

        <div class="flex flex-wrap gap-1.5">
            @if ($vacancy->category)
                <span class="text-[11.5px] font-medium rounded-full bg-[--color-grey-100] text-[--color-ink-600] px-2.5 py-1">{{ $vacancy->category }}</span>
            @endif
            @if ($vacancy->trc_assistance)
                <span class="text-[11.5px] font-medium rounded-full bg-[--color-gold-100] text-[--color-gold-600] px-2.5 py-1">TRC Assistance</span>
            @endif
        </div>
    </div>

    <div class="boarding-stub px-6 py-4 flex items-center justify-between mt-auto">
        <span class="font-mono-tag text-[11px] text-[--color-ink-400]">{{ $vacancy->english_level ?: 'On-site training provided' }}</span>
        <a href="{{ route('contact') }}?vacancy={{ $vacancy->id }}" class="text-[13px] font-semibold text-[--color-navy-900] underline underline-offset-4 whitespace-nowrap">Apply Now</a>
    </div>
</div>
