<section id="industries" class="relative py-12 md:py-24 px-6 md:px-12 bg-[#F5F1E8]" style="z-index: 4;">
    <div class="max-w-[1920px] mx-auto">
        <!-- Main Card Container -->
        <div class="industries-container opacity-0 relative overflow-hidden rounded-[2rem] md:rounded-[3rem] aspect-[4/3] md:aspect-[21/9] lg:aspect-[21/9] flex items-center justify-center group">
            
            <!-- Background Image -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('assets/img/bg-industries.png') }}" 
                     alt="Industries We Serve" 
                     class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                <!-- Overlay for Text Contrast -->
                <div class="absolute inset-0 bg-black/30 bg-gradient-to-t from-black/40 to-transparent"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 w-full px-6 flex flex-col items-center">
                <div class="text-center mb-8 md:mb-12">
                    <p class="industries-label opacity-0 text-[10px] md:text-sm lg:text-base font-lato text-white/80 tracking-[0.2em] uppercase mb-4">
                        Industries We Serve
                    </p>
                    <h2 class="industries-main-title opacity-0 text-3xl md:text-5xl lg:text-7xl font-radley text-white leading-tight">
                        Luxury Hospitality & Beyond
                    </h2>
                </div>

                <!-- Numbered List (Horizontal on Desktop, Grid on Mobile) -->
                <div class="industries-list opacity-0 flex flex-wrap justify-center gap-x-8 gap-y-4 md:gap-x-12 max-w-4xl">
                    @php
                        $industries = [
                            "Hotels & Resorts",
                            "Private Estates",
                            "Yachts & Aviation",
                            "Fine Dining",
                            "Wellness & Spa",
                            "Corporate Spaces"
                        ];
                    @endphp
                    @foreach($industries as $index => $industry)
                        <div class="flex items-center space-x-2 md:space-x-3">
                            <span class="text-[9px] md:text-xs font-lato text-white/40 tabular-nums">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>
                            <span class="text-xs md:text-sm lg:text-base font-inter text-white tracking-widest uppercase">
                                {{ $industry }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Slider Arrow (Right) -->
            <button class="industries-arrow opacity-0 absolute right-8 top-1/2 -translate-y-1/2 w-12 h-12 md:w-16 md:h-16 rounded-full border border-white/30 flex items-center justify-center text-white hover:bg-white hover:text-black transition-all duration-300 group/arrow">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 md:w-8 md:h-8 transition-transform group-hover/arrow:translate-x-1">
                    <path d="M5 12h14m-7-7 7 7-7 7"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    const industriesTl = gsap.timeline({
        scrollTrigger: {
            trigger: '#industries',
            start: 'top 70%',
            toggleActions: 'play none none none'
        }
    });

    // Reveal main container
    industriesTl.to('.industries-container', {
        opacity: 1,
        y: 0,
        startAt: { y: 40 },
        duration: 1.5,
        ease: 'power4.out'
    })
    
    // Reveal text elements
    .to('.industries-label', {
        opacity: 1,
        y: 0,
        startAt: { y: 20 },
        duration: 1,
        ease: 'power3.out'
    }, '-=0.8')
    .to('.industries-main-title', {
        opacity: 1,
        y: 0,
        startAt: { y: 30 },
        duration: 1.2,
        ease: 'power3.out'
    }, '-=0.8')
    .to('.industries-list', {
        opacity: 1,
        y: 0,
        startAt: { y: 20 },
        duration: 1,
        ease: 'power3.out'
    }, '-=0.8');
});
</script>
