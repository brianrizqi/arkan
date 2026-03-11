@php
    $navbarTheme = 'navbar-light-theme';
    $navDark = true;
    $navbarEntrance = false;
    $bodyClass = 'bg-[#FCFAF8]';
@endphp

@extends('layouts.app')

@section('content')
<div class="sections-wrapper relative overflow-x-hidden">
    <main class="w-full flex-grow pt-24 lg:pt-24 pb-0 overflow-x-hidden">
        <!-- Journal Header & Intro -->
        <section class="w-full max-w-[1920px] mx-auto px-4 md:px-8 lg:px-16 xl:px-24 pt-12 md:pt-24 pb-12 reveal">
            <div class="flex flex-col gap-8 md:gap-16 relative">
                <!-- Title area -->
                <div class="w-full">
                    <span class="font-radley text-[#6b5c49] text-xs md:text-sm tracking-widest uppercase mb-4 md:mb-6 block">The ARKAN Journal</span>
                    <h1 class="text-[#333333] text-4xl md:text-[4rem] lg:text-[5.5rem] leading-[1.1] font-radley tracking-tight max-w-4xl">
                        Insights into <span class="italic text-[#C4A882]" style="font-style: italic;">Refined</span><br />
                        Hospitality <span class="text-[#C4A882]">Standards</span>
                    </h1>
                </div>

                <!-- Pre-Header Text -->
                <div class="flex flex-col md:flex-row md:items-start gap-6 md:gap-24 lg:gap-32 w-full mt-4 md:mt-12">
                    <!-- Small Badge or Title on left -->
                    <div class="inline-block px-4 py-1.5 md:px-6 md:py-2 bg-[#d2bb9c]/20 rounded-sm">
                        <span class="font-radley text-[#5c4f3d] text-sm md:text-base">Featured Stories</span>
                    </div>

                    <!-- Intro Paragraph -->
                    <div class="w-full md:max-w-4xl">
                        <p class="font-sans text-[#8a8174] text-[15px] md:text-lg leading-relaxed">
                            Exploring the intersection of Saudi craft, global logistics, and the evolving standards 
                            of luxury hospitality procurement and production.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Journal Grid Area -->
        <section class="w-full max-w-[1920px] mx-auto px-4 md:px-8 lg:px-16 xl:px-24 pb-24 md:pb-32">
            <div class="flex flex-col gap-4 md:gap-6 w-full">

                <!-- Featured (Full Width) -->
                <a href="{{ url('/journal-detail') }}" class="group reveal relative w-full aspect-[16/10] md:aspect-[21/9] lg:aspect-[2.5/1] overflow-hidden rounded-sm block shadow-sm border border-black/5 cursor-pointer">
                    <img src="{{ asset('assets/img/our-jurnal-1.png') }}" alt="Hospitality Fabric" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10 transition-opacity duration-500"></div>

                    <div class="absolute bottom-0 left-0 w-full p-6 md:p-10 z-20 flex flex-col justify-end">
                        <span class="font-radley text-white/90 text-[10px] md:text-xs uppercase tracking-[0.2em] mb-3">Hospitality Manufacturing</span>
                        <h3 class="font-sans font-semibold text-white text-lg md:text-2xl lg:text-3xl leading-snug uppercase">
                            THE ART OF PRECISION IN LUXURY HOSPITALITY PRODUCTION
                        </h3>
                    </div>
                </a>

                <!-- Grid Row 2: 2 Columns -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <a href="{{ url('/journal-detail') }}" class="group reveal reveal-delay-1 relative w-full aspect-[4/3] md:aspect-[16/9] overflow-hidden rounded-sm block shadow-sm border border-black/5 cursor-pointer">
                        <img src="{{ asset('assets/img/about-7.png') }}" alt="Amenities" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10 transition-opacity duration-500"></div>

                        <div class="absolute bottom-0 left-0 w-full p-5 md:p-8 z-20 flex flex-col justify-end">
                            <span class="font-radley text-white/90 text-[10px] md:text-xs uppercase tracking-[0.2em] mb-2">Hospitality Manufacturing</span>
                            <h3 class="font-sans font-semibold text-white text-base md:text-lg lg:text-xl leading-snug uppercase">
                                AMENITIES FOR THE MODERN AIR TRAVEL EXPERIENCE
                            </h3>
                        </div>
                    </a>

                    <a href="{{ url('/journal-detail') }}" class="group reveal reveal-delay-2 relative w-full aspect-[4/3] md:aspect-[16/9] overflow-hidden rounded-sm block shadow-sm border border-black/5 cursor-pointer">
                        <img src="{{ asset('assets/img/our-jurnal-3.png') }}" alt="Towels" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10 transition-opacity duration-500 pointer-events-none"></div>

                        <div class="absolute bottom-0 left-0 w-full p-5 md:p-8 z-20 flex flex-col justify-end pointer-events-none">
                            <span class="font-radley text-white/90 text-[10px] md:text-xs uppercase tracking-[0.2em] mb-2">Hospitality Manufacturing</span>
                            <h3 class="font-sans font-semibold text-white text-base md:text-lg lg:text-xl leading-snug uppercase">
                                REFINING TEXTILES FOR PREMIUM GUEST EXPERIENCES
                            </h3>
                        </div>
                    </a>
                </div>

                <!-- Grid Row 3: 2 Columns -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <a href="{{ url('/journal-detail') }}" class="group reveal relative w-full aspect-[4/3] md:aspect-[21/9] overflow-hidden rounded-sm block shadow-sm border border-black/5 cursor-pointer">
                        <img src="{{ asset('assets/img/bg-our-process.png') }}" alt="Bottles" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10 transition-opacity duration-500 pointer-events-none"></div>

                        <div class="absolute bottom-0 left-0 w-full p-5 md:p-8 z-20 flex flex-col justify-end pointer-events-none">
                            <span class="font-radley text-white/90 text-[10px] md:text-xs uppercase tracking-[0.2em] mb-2">Circular Sourcing</span>
                            <h3 class="font-sans font-semibold text-white text-base md:text-lg lg:text-xl leading-snug uppercase">
                                THE FUTURE OF SUSTAINABLE OS&E PACKAGING
                            </h3>
                        </div>
                    </a>

                    <a href="{{ url('/journal-detail') }}" class="group reveal relative w-full aspect-[4/3] md:aspect-[21/9] overflow-hidden rounded-sm block shadow-sm border border-black/5 cursor-pointer">
                        <img src="{{ asset('assets/img/bg-our-process-2.png') }}" alt="Person" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10 transition-opacity duration-500 pointer-events-none"></div>

                        <div class="absolute bottom-0 left-0 w-full p-5 md:p-8 z-20 flex flex-col justify-end pointer-events-none">
                            <span class="font-radley text-white/90 text-[10px] md:text-xs uppercase tracking-[0.2em] mb-2">Digital Control</span>
                            <h3 class="font-sans font-semibold text-white text-base md:text-lg lg:text-xl leading-snug uppercase">
                                OPTIMIZING HOSPITALITY SUPPLY CHAINS WITH AI
                            </h3>
                        </div>
                    </a>
                </div>

                <!-- Grid Row 4: 2 Columns -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <a href="{{ url('/journal-detail') }}" class="group reveal relative w-full aspect-[4/3] md:aspect-[16/9] overflow-hidden rounded-sm block shadow-sm border border-black/5 cursor-pointer">
                        <img src="{{ asset('assets/img/bg-our-process-3.png') }}" alt="Interior Architecture" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10 transition-opacity duration-500 pointer-events-none"></div>

                        <div class="absolute bottom-0 left-0 w-full p-5 md:p-8 z-20 flex flex-col justify-end pointer-events-none">
                            <span class="font-radley text-white/90 text-[10px] md:text-xs uppercase tracking-[0.2em] mb-2">Design Talent</span>
                            <h3 class="font-sans font-semibold text-white text-base md:text-lg lg:text-xl leading-snug uppercase">
                                MERGING SAUDI HERITAGE WITH GLOBAL AESTHETICS
                            </h3>
                        </div>
                    </a>

                    <a href="{{ url('/journal-detail') }}" class="group reveal relative w-full aspect-[4/3] md:aspect-[16/9] overflow-hidden rounded-sm block shadow-sm border border-black/5 cursor-pointer">
                        <img src="{{ asset('assets/img/bg-industries.png') }}" alt="Plants and Light" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10 transition-opacity duration-500 pointer-events-none"></div>

                        <div class="absolute bottom-0 left-0 w-full p-5 md:p-8 z-20 flex flex-col justify-end pointer-events-none">
                            <span class="font-radley text-white/90 text-[10px] md:text-xs uppercase tracking-[0.2em] mb-2">Logistics Excellence</span>
                            <h3 class="font-sans font-semibold text-white text-base md:text-lg lg:text-xl leading-snug uppercase">
                                REDEFINING THE 5PL MODEL FOR REGIONAL GROWTH
                            </h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="reveal relative w-full h-[60vh] md:h-[70vh] min-h-[400px] flex items-center justify-center overflow-hidden">
            <img src="{{ asset('assets/img/our-jurnal-1.png') }}" alt="Contact Arkan background" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />
            <div class="absolute inset-0 bg-black/40 xl:bg-black/30 z-0 pointer-events-none"></div>
            <div class="relative z-10 flex flex-col items-center justify-center text-center px-4 md:px-12 max-w-4xl mx-auto">
                <h2 class="text-white font-sans font-medium text-2xl md:text-3xl lg:text-4xl leading-snug md:leading-normal mb-8 md:mb-12">
                    We craft premium amenities with a focus on quality, precision, and<br class="hidden md:block" />
                    international standards, supported by some of the strongest.
                </h2>
                <a href="{{ url('/contact') }}" class="inline-block px-10 py-3.5 rounded-full border border-white text-white text-[10px] md:text-xs font-sans font-bold tracking-[0.3em] hover:bg-white hover:text-black transition-all duration-300 pointer-events-auto uppercase">
                    Contact Us
                </a>
            </div>
        </section>
    </main>
</div>

@push('scripts')
<script>
    history.scrollRestoration = "manual";
    window.scrollTo(0, 0);

    document.addEventListener('DOMContentLoaded', () => {
        if (typeof IntersectionObserver !== 'undefined') {
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            }, { threshold: 0.1 });
            document.querySelectorAll(".reveal").forEach((el) => revealObserver.observe(el));
        }
    });
</script>
@endpush
@endsection
