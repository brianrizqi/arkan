<section id="ose" class="relative py-32 px-12 min-h-[80vh] flex items-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/img/bg-texture.png') }}" 
             alt="" 
             class="w-full h-full object-cover opacity-30">
    </div>

    <div class="max-w-[1920px] mx-auto w-full relative z-10">
        <div class="flex flex-col md:flex-row items-end gap-12">
            <!-- Title -->
            <div class="ose-title-wrapper">
                <h2 class="font-radley text-[60px] md:text-[80px] leading-[90%] tracking-[-0.05em] text-[#1A1A1A]">
                    <span class="italic text-[40px] md:text-[50px] block mb-2">The</span>
                    OS&E
                </h2>
            </div>

            <!-- Description -->
            <div class="ose-description max-w-[500px] mb-4">
                <p class="font-archivo text-[16px] md:text-[18px] leading-[1.6] text-[#1A1A1A] opacity-80">
                    Through our global network of ateliers, we design and curate bespoke, 
                    sustainably handcrafted objects that redefine the hospitality experience.
                </p>
            </div>
        </div>
    </div>

    <!-- Ornament -->
    <div class="absolute right-[-10%] top-1/2 -translate-y-1/2 w-[60%] md:w-[45%] opacity-10 pointer-events-none ose-ornament">
        <img src="{{ asset('assets/img/ornament.png') }}" alt="" class="w-full h-auto">
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap !== 'undefined') {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: '#ose',
                start: 'top 70%',
                toggleActions: 'play none none none'
            }
        });

        tl.fromTo('.ose-title-wrapper', 
            { x: -50, opacity: 0 },
            { x: 0, opacity: 1, duration: 1.2, ease: 'power4.out' }
        )
        .fromTo('.ose-description', 
            { y: 30, opacity: 0 },
            { y: 0, opacity: 1, duration: 1, ease: 'power3.out' },
            '-=0.8'
        )
        .fromTo('.ose-ornament', 
            { scale: 0.8, rotate: -15, opacity: 0 },
            { scale: 1, rotate: 0, opacity: 0.2, duration: 2, ease: 'power2.out' },
            '-=1.5'
        );
    }
});
</script>
