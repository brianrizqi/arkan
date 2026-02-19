<section id="ose" class="relative overflow-hidden bg-[#F5F1E8] z-[60]">
    <!-- Blue Gradient Overlay (Fades in) -->
    <div class="ose-blue-gradient absolute inset-0 opacity-0 z-0" style="background: linear-gradient(180deg, #98B9D1 0%, #083D6E 100%);"></div>

    <!-- Pinned Content Area -->
    <div id="ose-pin-container" class="relative min-h-screen flex flex-col items-center justify-center text-center px-6 md:px-12 py-20">
        
        <!-- Star Ornament (Inside centered container for perfect alignment) -->
        <div class="ose-final-ornament absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-xl md:max-w-4xl lg:max-w-6xl opacity-0 pointer-events-none z-1">
            <img src="{{ asset('assets/img/ornament.svg') }}" 
                 alt="" 
                 class="w-full h-auto opacity-30 filter invert brightness-200">
        </div>

        <!-- CTA Content -->
        <div class="relative z-10 max-w-5xl mx-auto">
            <h2 class="ose-cta-title opacity-0 text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-serif-luxury text-[#D2BB9C] leading-tight mb-8 md:mb-12">
                Let’s bring it to <span class="italic font-radley">life</span>, together.
            </h2>
            <div class="ose-cta-button opacity-0">
                <a href="https://wa.me/628123456789" target="_blank" class="inline-block px-8 py-3 md:px-10 md:py-4 rounded-full border border-[#D2BB9C]/40 text-[#D2BB9C] font-lato text-xs sm:text-sm tracking-widest uppercase hover:bg-[#D2BB9C] hover:text-[#083D6E] transition-all duration-500">
                    Contact Us
                </a>
            </div>
        </div>
    </div>

    <!-- Global Footer -->
    <footer class="relative z-20 bg-[#121212] py-12 md:py-16 px-6 md:px-12">
        <div class="max-w-[1920px] mx-auto flex flex-col md:flex-row items-center justify-between gap-10 md:gap-8 text-center md:text-left">
            <!-- Left: Brand & Copyright -->
            <div class="flex flex-col items-center md:items-start">
                <img src="{{ asset('assets/img/logo-arkan.svg') }}" alt="ARKAN" class="h-5 md:h-6 w-auto object-contain brightness-0 invert mb-4 md:mb-6">
                <p class="text-white/40 font-lato text-[10px] md:text-xs uppercase tracking-wider">
                    © 2026 ARKAN Technologies. All rights reserved.
                </p>
            </div>

            <!-- Right: Links -->
            <div class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-6 sm:gap-8 md:gap-12">
                <a href="#" class="text-white/60 hover:text-white font-lato text-[10px] md:text-xs uppercase tracking-widest transition-colors">Help & Support</a>
                <a href="#" class="text-white/60 hover:text-white font-lato text-[10px] md:text-xs uppercase tracking-widest transition-colors">Terms & Conditions</a>
                <a href="#" class="text-white/60 hover:text-white font-lato text-[10px] md:text-xs uppercase tracking-widest transition-colors">Privacy Policy</a>
            </div>
        </div>
    </footer>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    // Background Gradient Transition
    gsap.to('.ose-blue-gradient', {
        opacity: 1,
        ease: 'none',
        scrollTrigger: {
            trigger: '#ose',
            start: 'top 40%',
            end: 'center center',
            scrub: true,
        }
    });

    // Final Ornament & Content Reveal
    const mainTl = gsap.timeline({
        scrollTrigger: {
            trigger: '#ose-pin-container',
            start: 'top 40%',
            toggleActions: 'play none none none'
        }
    });

    mainTl.to('.ose-final-ornament', { 
        opacity: 0.3, 
        scale: 1, 
        startAt: { scale: 0.8 }, 
        duration: 2, 
        ease: 'power2.out' 
    })
    .to('.ose-cta-title', { 
        opacity: 1, 
        y: 0, 
        startAt: { y: 50 }, 
        duration: 1.5, 
        ease: 'power3.out' 
    }, '-=1.5')
    .to('.ose-cta-button', { 
        opacity: 1, 
        y: 0, 
        startAt: { y: 30 }, 
        duration: 1.2, 
        ease: 'power3.out' 
    }, '-=1');
});
</script>

<style>
/* Ensure the footer doesn't get clipped and is always the end of the page */
#ose {
    min-height: 100vh;
    isolation: isolate;
}
.ose-blue-gradient {
    pointer-events: none;
}
</style>
