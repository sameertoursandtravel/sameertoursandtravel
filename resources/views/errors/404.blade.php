<x-layouts.app>
    <x-slot:title>Page Not Found | Sameer Tours & Travels</x-slot:title>

    <section class="bg-[--color-navy-950] min-h-[70vh] flex items-center">
        <div class="mx-auto max-w-lg px-5 text-center py-24">
            <span class="font-mono-tag text-[--color-gold-400] text-[13px]">ERROR 404</span>
            <h1 class="font-display font-extrabold text-white text-[32px] sm:text-[40px] mt-4">This route isn't on our itinerary</h1>
            <p class="text-white/60 text-[15px] mt-4">The page you're looking for may have moved. Try one of the links below.</p>
            <div class="flex flex-wrap justify-center gap-3 mt-8">
                <a href="{{ route('home') }}" class="inline-flex items-center rounded-full bg-[--color-gold-500] text-[--color-navy-950] font-semibold text-[14px] px-6 py-3 hover:bg-[--color-gold-400] transition">Back to Home</a>
                <a href="{{ route('vacancies') }}" class="inline-flex items-center rounded-full border border-white/25 text-white font-semibold text-[14px] px-6 py-3 hover:bg-white/10 transition">Current Vacancies</a>
            </div>
        </div>
    </section>
</x-layouts.app>
