<section id="about" class="relative overflow-hidden bg-white" style="z-index: 2;">
    <!-- Main Wrapper for Pinning -->
    <div id="about-pin-wrapper" class="relative h-screen w-full flex flex-col items-center justify-center overflow-hidden">
        
        <!-- Background Layer -->
        <div class="absolute inset-0 z-0">
            <!-- Background 1 -->
            <div id="about-bg-1" class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-100 transition-opacity duration-1000" 
                 style="background-image: url('{{ asset('assets/img/about-bg-1.png') }}');">
                <div class="absolute inset-0 bg-white/40"></div>
            </div>
            <!-- Background 2 -->
            <div id="about-bg-2" class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-0 transition-opacity duration-1000" 
                 style="background-image: url('{{ asset('assets/img/about-bg-2.png') }}');">
                <div class="absolute inset-0 bg-white/40"></div>
            </div>
        </div>

        <!-- Content Layer -->
        <div class="relative z-10 w-full px-6 max-w-7xl mx-auto flex flex-col items-center">
            
            <!-- Panel 1 Content -->
            <div id="about-content-1" class="absolute flex flex-col items-center text-center">
                <!-- Ornament -->
                <div class="about-ornament opacity-0 mb-12 scale-90">
                    <img src="{{ asset('assets/img/ornament.svg') }}" alt="" class="w-20 h-20 md:w-24 md:h-24 object-contain">
                </div>

                <!-- Main Title -->
                <div class="max-w-4xl mx-auto">
                    <h2 class="about-title-1 opacity-0 text-4xl md:text-6xl lg:text-7xl font-serif-luxury text-[#1B1B18] leading-[1.15] font-normal">
                        Crafted in Saudi.<br>Refined Worldwide.
                    </h2>
                </div>
            </div>

            <!-- Panel 2 Content -->
            <div id="about-content-2" class="absolute flex flex-col items-center text-center opacity-0 pointer-events-none">
                <div class="max-w-2xl mx-auto">
                    <p class="about-text-2 text-sm md:text-base font-lato tracking-wide text-[#1B1B18] leading-relaxed">
                        ARKAN is a Saudi based luxury hospitality company combining leading hospitality production capabilities with exceptional design talent. We craft premium amenities with a focus on quality, precision, and international standards, supported by some of the strongest manufacturing expertise in the market.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    #about-content-1, #about-content-2 {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        const pinWrapper = document.getElementById('about-pin-wrapper');
        if (!pinWrapper) return;

        // Create the master timeline for the About section
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: '#about',
                start: 'top top',
                end: '+=200%', // Scroll distance for the whole story
                pin: true,
                scrub: 1,
                // markers: true, // Uncomment for debugging
            }
        });

        // Step 1: Reveal Content 1
        tl.to('.about-ornament', {
            opacity: 1,
            scale: 1,
            duration: 1,
            ease: 'back.out(1.7)'
        })
        .to('.about-title-1', {
            opacity: 1,
            y: 0,
            startAt: { y: 50 },
            duration: 1,
            ease: 'power4.out'
        }, '-=0.5')

        // Step 2: Hold for a bit
        .to({}, { duration: 1 }) 

        // Step 3: Transition to Panel 2
        .to('#about-bg-1', { opacity: 0, duration: 1.5, ease: 'power2.inOut' })
        .to('#about-bg-2', { opacity: 1, duration: 1.5, ease: 'power2.inOut' }, '-=1.5')
        
        .to('#about-content-1', { opacity: 0, y: -50, duration: 1, ease: 'power2.inOut' }, '-=1.5')
        .to('#about-content-2', { 
            opacity: 1, 
            y: 0, 
            startAt: { y: 50 }, 
            duration: 1.5, 
            ease: 'power3.out',
            onStart: () => {
                document.getElementById('about-content-2').classList.remove('pointer-events-none');
            }
        }, '-=0.8');

        // Step 4: Final hold
        tl.to({}, { duration: 1 });
    });
</script>
