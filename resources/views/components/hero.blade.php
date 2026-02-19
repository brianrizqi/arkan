<section id="hero-section" class="section-panel relative min-h-screen flex flex-col justify-between overflow-hidden bg-black" style="z-index: 1;">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-100" 
         style="background-image: url('{{ asset('assets/img/hero-section.png') }}');">
    </div>
    <!-- Subtle Overlay for contrast -->
    <div class="absolute inset-0 bg-black/30"></div>

    <!-- Main Content -->
    <main class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-4">
        <div class="hero-content">
            <div class="logo-text opacity-0 scale-95">
                <img src="{{ asset('assets/img/logo-arkan.svg') }}" alt="Arkan Logo" class="w-full max-w-2xl mx-auto h-auto">
            </div>
            <p class="tagline opacity-0 mt-8 text-sm md:text-lg font-inter tracking-[0.6em] text-white/70 uppercase">
                Crafting the standard of refined hospitality
            </p>
        </div>
    </main>

    <!-- Footer / Scroll Indicator -->
    <footer class="relative z-10 w-full pb-12 flex flex-col items-center text-white/60">
        <div class="scroll-indicator opacity-0 flex flex-col items-center cursor-pointer group">
            <div class="mouse-icon w-[22px] h-[36px] border border-white/40 rounded-full relative mb-3 p-1">
                <div class="mouse-dot w-1.5 h-1.5 bg-white rounded-full absolute left-1/2 -translate-x-1/2"></div>
            </div>
            <span class="text-[10px] md:text-xs font-radley tracking-[0.2em] uppercase group-hover:text-white transition-colors">Scroll for more</span>
        </div>
    </footer>
</section>

<style>
    .mouse-dot {
        animation: mouseScroll 2s infinite ease-in-out;
    }

    @keyframes mouseScroll {
        0% { transform: translate(-50%, 0); opacity: 0; }
        20% { opacity: 1; }
        60% { transform: translate(-50%, 15px); opacity: 0; }
        100% { opacity: 0; }
    }
</style>

<script>
    window.initHeroEntrance = () => {
        gsap.registerPlugin(ScrollTrigger);

        // === Entrance Animation ===
        const tl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 1.5 } });

        tl.to('.logo-text', {
            opacity: 1,
            y: 0,
            scale: 1,
            startAt: { y: 30, scale: 0.95 },
            duration: 2
        })
        .to('.tagline', {
            opacity: 1,
            y: 0,
            startAt: { y: 20 },
            duration: 1.2
        }, '-=1.2')
        .to('.nav-item', {
            opacity: 1,
            y: 0,
            startAt: { y: -20 },
            stagger: 0.1,
            duration: 1
        }, '-=1')
        .to('.scroll-indicator', {
            opacity: 1,
            y: 0,
            startAt: { y: 20 },
            duration: 1
        }, '-=0.8');
    };
</script>
