<section id="journal" class="relative bg-[#F5F1E8] py-16 md:py-24 px-6 md:px-12" style="z-index: 4;">
    <div class="max-w-[1920px] mx-auto">
        
        <!-- Header -->
        <div class="flex items-end justify-between mb-8 md:mb-16">
            <h2 class="journal-title opacity-0 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif-luxury text-[#1B1B18] tracking-tight">
                From our Journal
            </h2>
            <a href="#" class="journal-view-all opacity-0 text-xs sm:text-sm md:text-base font-lato text-[#1B1B18]/60 hover:text-[#1B1B18] transition-colors border-b border-[#1B1B18]/20 pb-1">
                View All
            </a>
        </div>

        <!-- Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
            <!-- Large Feature Item -->
            <div class="journal-item opacity-0 md:col-span-2 group cursor-pointer overflow-hidden rounded-xl md:rounded-3xl">
                <div class="aspect-[4/3] sm:aspect-[16/8] md:aspect-[21/9] overflow-hidden">
                    <img src="{{ asset('assets/img/our-jurnal-1.png') }}" 
                         alt="Journal Entry 1" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
            </div>

            <!-- Smaller Item 1 -->
            <div class="journal-item opacity-0 group cursor-pointer overflow-hidden rounded-xl md:rounded-3xl">
                <div class="aspect-[4/3] md:aspect-[3/2] overflow-hidden">
                    <img src="{{ asset('assets/img/our-jurnal-2.png') }}" 
                         alt="Journal Entry 2" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
            </div>

            <!-- Smaller Item 2 -->
            <div class="journal-item opacity-0 group cursor-pointer overflow-hidden rounded-xl md:rounded-3xl">
                <div class="aspect-[4/3] md:aspect-[3/2] overflow-hidden">
                    <img src="{{ asset('assets/img/our-jurnal-3.png') }}" 
                         alt="Journal Entry 3" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    const journalTl = gsap.timeline({
        scrollTrigger: {
            trigger: '#journal',
            start: 'top 80%',
            toggleActions: 'play none none none'
        }
    });

    journalTl.to('.journal-title', { opacity: 1, y: 0, startAt: { y: 30 }, duration: 1.2, ease: 'power3.out' })
             .to('.journal-view-all', { opacity: 1, x: 0, startAt: { x: 20 }, duration: 1, ease: 'power3.out' }, '-=0.8')
             .to('.journal-item', { 
                 opacity: 1, 
                 y: 0, 
                 startAt: { y: 40 }, 
                 duration: 1, 
                 stagger: 0.2, 
                 ease: 'power3.out' 
             }, '-=0.6');
});
</script>
