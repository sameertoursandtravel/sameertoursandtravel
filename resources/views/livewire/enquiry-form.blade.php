<div class="relative bg-white rounded-2xl border border-[--color-grey-200] shadow-sm p-6 sm:p-8">
    @if ($submitted)
        <div class="text-center py-10" wire:key="success">
            <div class="mx-auto w-14 h-14 rounded-full stamp-ring text-[--color-stamp-green] flex items-center justify-center mb-5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <h3 class="font-display font-bold text-xl text-[--color-navy-900] mb-2">Enquiry Received</h3>
            <p class="text-[--color-ink-600] text-[15px] max-w-sm mx-auto">Thank you. Our team will contact you within 1&ndash;2 business days. For faster updates, join our WhatsApp Channel.</p>
            <button wire:click="$set('submitted', false)" class="mt-6 text-[13.5px] font-semibold text-[--color-navy-900] underline underline-offset-4">Submit another enquiry</button>
        </div>
    @else
        <form wire:submit="submit" class="space-y-5">
            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label for="full_name" class="block text-[13px] font-semibold text-[--color-ink-900] mb-1.5">Full Name</label>
                    <input wire:model="full_name" id="full_name" type="text" class="w-full rounded-lg border border-[--color-grey-200] px-4 py-2.5 text-[14.5px] focus:border-[--color-gold-500] focus:ring-1 focus:ring-[--color-gold-500] outline-none transition" placeholder="Enter your full name">
                    @error('full_name') <p class="text-red-600 text-[12.5px] mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="phone" class="block text-[13px] font-semibold text-[--color-ink-900] mb-1.5">Phone Number</label>
                    <input wire:model="phone" id="phone" type="tel" class="w-full rounded-lg border border-[--color-grey-200] px-4 py-2.5 text-[14.5px] focus:border-[--color-gold-500] focus:ring-1 focus:ring-[--color-gold-500] outline-none transition" placeholder="+91 XXXXX XXXXX">
                    @error('phone') <p class="text-red-600 text-[12.5px] mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="email" class="block text-[13px] font-semibold text-[--color-ink-900] mb-1.5">Email Address</label>
                <input wire:model="email" id="email" type="email" class="w-full rounded-lg border border-[--color-grey-200] px-4 py-2.5 text-[14.5px] focus:border-[--color-gold-500] focus:ring-1 focus:ring-[--color-gold-500] outline-none transition" placeholder="you@example.com">
                @error('email') <p class="text-red-600 text-[12.5px] mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label for="country_interested" class="block text-[13px] font-semibold text-[--color-ink-900] mb-1.5">Country Interested</label>
                    <select wire:model="country_interested" id="country_interested" class="w-full rounded-lg border border-[--color-grey-200] px-4 py-2.5 text-[14.5px] focus:border-[--color-gold-500] focus:ring-1 focus:ring-[--color-gold-500] outline-none transition bg-white">
                        <option value="">Select a country</option>
                        <option value="Israel">Israel</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Other / Not sure">Other / Not sure</option>
                    </select>
                </div>
                <div>
                    <label for="position_interested" class="block text-[13px] font-semibold text-[--color-ink-900] mb-1.5">Position Interested</label>
                    <input wire:model="position_interested" id="position_interested" type="text" class="w-full rounded-lg border border-[--color-grey-200] px-4 py-2.5 text-[14.5px] focus:border-[--color-gold-500] focus:ring-1 focus:ring-[--color-gold-500] outline-none transition" placeholder="e.g. Caregiver, Welder">
                </div>
            </div>

            <div>
                <label for="message" class="block text-[13px] font-semibold text-[--color-ink-900] mb-1.5">Message</label>
                <textarea wire:model="message" id="message" rows="4" class="w-full rounded-lg border border-[--color-grey-200] px-4 py-2.5 text-[14.5px] focus:border-[--color-gold-500] focus:ring-1 focus:ring-[--color-gold-500] outline-none transition" placeholder="Tell us about your experience and preferred timeline"></textarea>
            </div>

            <div>
                <label for="resume" class="block text-[13px] font-semibold text-[--color-ink-900] mb-1.5">Upload Resume <span class="font-normal text-[--color-ink-400]">(optional, PDF/DOC, max 5MB)</span></label>
                <input wire:model="resume" id="resume" type="file" accept=".pdf,.doc,.docx" class="w-full text-[13.5px] text-[--color-ink-600] file:mr-4 file:rounded-lg file:border-0 file:bg-[--color-grey-100] file:px-4 file:py-2 file:text-[13px] file:font-semibold file:text-[--color-navy-900]">
                <div wire:loading wire:target="resume" class="text-[12.5px] text-[--color-ink-400] mt-1">Uploading&hellip;</div>
                @error('resume') <p class="text-red-600 text-[12.5px] mt-1">{{ $message }}</p> @enderror
            </div>

            <button type="submit" wire:loading.attr="disabled" wire:target="submit" class="w-full inline-flex items-center justify-center rounded-full bg-[--color-navy-900] text-white font-semibold text-[15px] py-3.5 hover:bg-[--color-navy-800] transition disabled:opacity-60">
                <span wire:loading.remove wire:target="submit">Submit Enquiry</span>
                <span wire:loading wire:target="submit">Submitting&hellip;</span>
            </button>
            <p class="text-[12px] text-[--color-ink-400] text-center">We respect your privacy. Details are used only to process your enquiry &mdash; see our <a href="{{ route('privacy') }}" class="underline">Privacy Policy</a>.</p>
        </form>
    @endif
</div>
