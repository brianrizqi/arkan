<section id="about" class="relative py-24 md:py-32 px-6 bg-[#F5F1E8] flex flex-col items-center justify-center text-center overflow-hidden min-h-screen" style="z-index: 2;">
    <!-- Small ARKAN Text at Top -->
    <div class="about-logo opacity-0 mb-16">
        <p class="text-[#B8956A] text-xs md:text-sm tracking-[0.3em] font-cinzel uppercase">ARKAN</p>
    </div>

    <!-- Main Title -->
    <div class="max-w-4xl mx-auto mb-12">
        <h2 class="about-title opacity-0 text-4xl md:text-6xl lg:text-7xl font-serif-luxury text-[#1B1B18] leading-[1.15] font-normal">
            Crafted in Saudi.<br>Refined Worldwide.
        </h2>
    </div>

    <!-- Ornament -->
    <div class="about-ornament opacity-0 mb-12 scale-90">
        <img src="{{ asset('assets/img/ornament.png') }}" alt="" class="w-16 h-16 md:w-20 md:h-20 object-contain opacity-80">
    </div>

    <!-- Description -->
    <div class="max-w-2xl mx-auto">
        <p class="about-text opacity-0 text-xs md:text-sm font-inter tracking-wide text-[#1B1B18]/70 leading-relaxed">
            ARKAN is a Saudi based luxury hospitality company combining leading hospitality production capabilities with exceptional design talent. We craft premium amenities with a focus on quality, precision, and international standards, supported by some of the strongest manufacturing expertise in the market.
        </p>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        // === Content Entrance Timeline ===
        const aboutTl = gsap.timeline({
            scrollTrigger: {
                trigger: '#about',
                start: 'top 70%',
                toggleActions: 'play none none none'
            }
        });

        aboutTl.to('.about-logo', {
            opacity: 1,
            y: 0,
            startAt: { y: 30 },
            duration: 1,
            ease: 'power3.out'
        })
        .to('.about-title', {
            opacity: 1,
            y: 0,
            startAt: { y: 50 },
            duration: 1.5,
            ease: 'power4.out'
        }, '-=0.5')
        .to('.about-ornament', {
            opacity: 1,
            scale: 1,
            duration: 1.2,
            ease: 'back.out(1.7)'
        }, '-=0.8')
        .to('.about-text', {
            opacity: 1,
            y: 0,
            startAt: { y: 30 },
            duration: 1,
            ease: 'power3.out'
        }, '-=0.6');
    });
</script>
